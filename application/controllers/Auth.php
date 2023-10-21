<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Pengaduan Masyarakat TEKOTOK';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            // Validation success
            $this->_login();
        }
    }

    public function petugas()
    {


        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Pengaduan Masyarakat TEKOTOK';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/admin/login');
            $this->load->view('templates/auth_footer');
        } else {
            // Validation success
            $this->_login_admin();
        }
    }

    private function _login_admin()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('petugas', ['username' => $username])->row_array();

        // Jika Usernya Ada
        if ($user) {
            // var_dump($user['password']);
            // die;
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'level' => $user['level']
                ];
                $this->session->set_userdata($data);
                if ($user['level'] == 'admin') {
                    redirect('admin');
                } else {
                    redirect('petugas');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert  alert-danger" role="alert">
                    Wrong password!
                    </div>');
                redirect('auth/petugas');
                // var_dump($user['password']);
                // var_dump($password);
            }
        } else {
            $this->session->set_login('login', 1);
            $this->session->set_flashdata('message', '<div class="alert  alert-danger" role="alert">
            Username is not registered!
            </div>');
            redirect('auth/petugas');
        }

    }

    private function _login()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('masyarakat', ['username' => $username])->row_array();

        // Jika Usernya Ada
        if ($user) {

            // var_dump($user['password']);
            // die;
            // Jika Usernya Ada
            // if ($user) {
            // Cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'level' => $user['level'],
                    'nik' => $user['nik']
                ];
                $this->session->set_userdata($data);
                // if ($user['level'] == 'admin') {
                //     redirect('admin');
                // } else {
                //     redirect('user');
                // }
                // if ($user['role_id'] == 1) {
                //     redirect('admin');
                // } else if ($user['role_id'] == 2) {
                //     redirect('user');
                // } 
                // $this->session->set_userdata($data);
                redirect('Masyarakat');

            } else {
                $this->session->set_flashdata('message', '<div class="alert  alert-danger" role="alert">
                    Wrong password!
                    </div>');
                redirect('auth');
            }
            // } else {
            //     $this->session->set_flashdata('message', '<div class="alert  alert-danger" role="alert">
            //     This email has not been activated
            //     </div>');
            //     redirect('auth');
            // }
        } else {
            $this->session->set_login('login', 1);
            $this->session->set_flashdata('message', '<div class="alert  alert-danger" role="alert">
            Username is not registered!
            </div>');
            redirect('auth');
        }
    }

    public function registration()
    {

        if ($this->session->userdata('email')) {

            $user_data = $this->session->userdata('role_id');

            if ($user_data == 1) {
                redirect('admin');
            } else {
                redirect('user');
            }


        }

        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
        $this->form_validation->set_rules('nama', 'Name', 'required|trim');
        $this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => "Password isn't Match!",
            'min_length' => "Password too Short!"
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nik' => htmlspecialchars($this->input->post('nik', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'kelurahan' => htmlspecialchars($this->input->post('kelurahan', true)),
                'kecamatan' => htmlspecialchars($this->input->post('kecamatan', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'telp' => htmlspecialchars($this->input->post('telp', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            ];

            $this->db->insert('masyarakat', $data);

            // $this->_sendEmail();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Your account Has been successfully Created! Please Login.
            </div>');
            redirect('auth');

        }
    }

    // private function _sendEmail()
    // {
    //     $config = [
    //         'protocol'  => 'smtp',
    //         'smtp_host' => 'ssl://smtp.googlemail.com',
    //         'smtp_user' => 'testthisthose@gmail.com',
    //         'smtp_pass' => 'hayabusa22',
    //         'smtp_port' => 465,
    //         'mailtype'  => 'html',
    //         'charset'   => 'utf-8',
    //         'newline'   => "\r\n" 
    //     ];

    //     $this->load->library('email', $config);

    //     $this->email->from('testthisthose@gmail.com', 'Jhustynn');
    //     $this->email->to('jhustynherwanap@gmail.com');
    //     $this->email->subject('Testing');
    //     $this->email->message('Hello!');

    //     if ($this->email->send()) {
    //         return true;
    //     } else {
    //         echo $this->email->print_debugger();
    //         die;
    //     }

    // }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            You have been logged out!
        </div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }

}