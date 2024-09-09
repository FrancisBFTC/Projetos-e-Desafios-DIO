package br.com.boundary.UI;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyAdapter;
import java.awt.event.KeyEvent;

public class PacientesUI {
    private JFrame framePacientes;
    private JPanel panelPacientes;
    private JLabel lblPaciente;
    private JLabel lblCPF;
    private JLabel lblEndereco;
    private JLabel lblTelefone;
    private JTextField txtPaciente;
    private JTextField txtCPF;
    private JTextField txtEndereco;
    private JTextField txtTelefone;
    private JButton btnPaciente;

    public PacientesUI(String title){
        framePacientes = new JFrame(title);
        panelPacientes = new JPanel();

        lblPaciente = new JLabel("Paciente:");
        lblCPF = new JLabel("CPF:");
        lblEndereco = new JLabel("Endereco:");
        lblTelefone = new JLabel("Telefone:");
        txtPaciente = new JTextField();
        txtEndereco = new JTextField();
        txtTelefone = new JTextField();
        txtCPF = new JTextField();
        btnPaciente = new JButton("Cadastrar");

        framePacientes.setSize(500, 300);
        framePacientes.setLocationRelativeTo(null);
        framePacientes.setResizable(false);
        panelPacientes.setLayout(null);

        framePacientes.add(panelPacientes);
        panelPacientes.add(lblPaciente);
        panelPacientes.add(txtPaciente);
        panelPacientes.add(lblCPF);
        panelPacientes.add(txtCPF);
        panelPacientes.add(lblEndereco);
        panelPacientes.add(txtEndereco);
        panelPacientes.add(lblTelefone);
        panelPacientes.add(txtTelefone);
        panelPacientes.add(btnPaciente);

        lblPaciente.setBounds(50, 20, lblPaciente.getText().length()*8, 20);
        txtPaciente.setBounds(120, 20, 300, 20);
        txtPaciente.addKeyListener(new KeyAdapter() {
            @Override
            public void keyTyped(KeyEvent e) {
                char c = e.getKeyChar();
                if(c == KeyEvent.VK_ENTER){
                    btnPaciente.doClick();
                }
            }
        });

        lblCPF.setBounds(50, 50, lblCPF.getText().length()*8, 20);
        txtCPF.setBounds(120, 50, 300, 20);
        txtCPF.addKeyListener(new KeyAdapter() {
            @Override
            public void keyTyped(KeyEvent e) {
                char c = e.getKeyChar();
                if(c == KeyEvent.VK_ENTER){
                    btnPaciente.doClick();
                }
            }
        });

        lblEndereco.setBounds(50, 80, lblEndereco.getText().length()*8, 20);
        txtEndereco.setBounds(120, 80, 300, 20);
        txtEndereco.addKeyListener(new KeyAdapter() {
            @Override
            public void keyTyped(KeyEvent e) {
                char c = e.getKeyChar();
                if(c == KeyEvent.VK_ENTER){
                    btnPaciente.doClick();
                }
            }
        });

        lblTelefone.setBounds(50, 110, lblTelefone.getText().length()*8, 20);
        txtTelefone.setBounds(120, 110, 300, 20);
        txtTelefone.addKeyListener(new KeyAdapter() {
            @Override
            public void keyTyped(KeyEvent e) {
                char c = e.getKeyChar();
                if(c == KeyEvent.VK_ENTER){
                    btnPaciente.doClick();
                }
            }
        });

        btnPaciente.setBounds(120, 140, 120, 20);
        btnPaciente.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {

            }
        });

        framePacientes.setVisible(true);

    }
}
