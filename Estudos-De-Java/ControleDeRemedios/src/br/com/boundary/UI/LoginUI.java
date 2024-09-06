package br.com.boundary.UI;

import br.com.control.LoginControl;
import br.com.entity.Login;

import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class LoginUI {

    private JFrame frameLogin;
    private JPanel panelLogin;
    private JTextField txtLogin;
    private JPasswordField txtSenha;
    private JLabel lblLogin;
    private JLabel lblSenha;
    private JButton btnLogin;

    public LoginUI(String windowTitle){

        LoginControl.loginInit();

        frameLogin = new JFrame(windowTitle);
        panelLogin = new JPanel();
        txtLogin = new JTextField();
        txtSenha = new JPasswordField();
        lblLogin = new JLabel("Login: ");
        lblSenha = new JLabel("Senha: ");
        btnLogin = new JButton("Entrar");

        panelLogin.add(txtLogin);
        panelLogin.add(txtSenha);
        panelLogin.add(lblLogin);
        panelLogin.add(lblSenha);
        panelLogin.add(btnLogin);
        frameLogin.add(panelLogin);

        frameLogin.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frameLogin.pack();
        frameLogin.setLocationRelativeTo(null);
        frameLogin.setVisible(true);

        frameLogin.setResizable(false);
        frameLogin.setSize(350, 200);
        panelLogin.setLayout(null);

        lblLogin.setBounds(10, 50, lblLogin.getText().length() * 8, 20);
        txtLogin.requestFocus();
        txtLogin.setBounds(50, 50, 250, 20);
        txtLogin.addActionListener(new ActionListener() {

            @Override
            public void actionPerformed(ActionEvent e) {
                btnLogin.doClick();
            }
        });

        lblSenha.setBounds(10, 80, lblSenha.getText().length() * 8, 20);
        txtSenha.setBounds(50, 80, 250, 20);
        txtSenha.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                btnLogin.doClick();
            }
        });

        btnLogin.setBounds(200, 110, 100, 20);
        btnLogin.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                // Implementar conexão com o banco de dados
                // E regras de negócio para Login

                String usuario = txtLogin.getText();
                String senha = txtSenha.getText();

                if(LoginControl.validarCamposLogin(usuario, senha)){
                    if(LoginControl.autenticarLogin(usuario, senha)){
                        Login login = LoginControl.getLogin();
                        login.setSession(1);
                        System.out.println("O usuario '" + login.getUsuario() + "' foi autenticado com sucesso!");

                        CentralUI centralUI = new CentralUI("Controle de Remédios - Sessão");
                        frameLogin.dispose();
                    }else{
                        JOptionPane.showMessageDialog(null, "Os dados estão incorretos!");
                    }
                    return;
                }

                JOptionPane.showMessageDialog(null, "Preencha todos os campos de login!");
            }
        });

    }
}
