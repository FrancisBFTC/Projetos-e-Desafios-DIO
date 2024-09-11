package br.com.boundary.UI;

import br.com.control.PacientesControl;
import br.com.entity.Pacientes;

import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyAdapter;
import java.awt.event.KeyEvent;

public class PacientesUI {
    private JFrame framePacientes;
    private JPanel panelPacientes;
    private JLabel lblNome;
    private JLabel lblCPF;
    private JLabel lblRG;
    private JLabel lblNascimento;
    private JLabel lblSexo;
    private JLabel lblEmail;
    private JLabel lblTelefone;
    private JLabel lblEndereco;
    private JTextField txtNome;
    private JTextField txtCPF;
    private JTextField txtRG;
    private JTextField txtNascimento;
    private JTextField txtSexo;
    private JTextField txtEmail;
    private JTextField txtTelefone;
    private JTextField txtEndereco;
    private JButton btnPaciente;
    private Pacientes[] paciente;

    public PacientesUI(String title){

        paciente = PacientesControl.pacientesInit();

        framePacientes = new JFrame(title);
        panelPacientes = new JPanel();

        lblNome = new JLabel("Paciente:");
        lblCPF = new JLabel("CPF:");
        lblRG = new JLabel("RG:");
        lblNascimento = new JLabel("Nascimento:");
        lblSexo = new JLabel("Sexo:");
        lblEmail = new JLabel("Email:");
        lblTelefone = new JLabel("Telefone:");
        lblEndereco = new JLabel("Endereco:");
        txtNome = new JTextField();
        txtCPF = new JTextField();
        txtRG = new JTextField();
        txtNascimento = new JTextField();
        txtSexo = new JTextField();
        txtEmail = new JTextField();
        txtTelefone = new JTextField();
        txtEndereco = new JTextField();
        btnPaciente = new JButton("Cadastrar");

        framePacientes.setSize(500, 350);
        framePacientes.setLocationRelativeTo(null);
        framePacientes.setResizable(false);
        panelPacientes.setLayout(null);

        framePacientes.add(panelPacientes);
        panelPacientes.add(lblNome);
        panelPacientes.add(txtNome);
        panelPacientes.add(lblCPF);
        panelPacientes.add(txtCPF);
        panelPacientes.add(lblRG);
        panelPacientes.add(txtRG);
        panelPacientes.add(lblNascimento);
        panelPacientes.add(txtNascimento);
        panelPacientes.add(lblSexo);
        panelPacientes.add(txtSexo);
        panelPacientes.add(lblEmail);
        panelPacientes.add(txtEmail);
        panelPacientes.add(lblTelefone);
        panelPacientes.add(txtTelefone);
        panelPacientes.add(lblEndereco);
        panelPacientes.add(txtEndereco);
        panelPacientes.add(btnPaciente);

        lblNome.setBounds(50, 20, lblNome.getText().length()*8, 20);
        txtNome.setBounds(120, 20, 300, 20);
        txtNome.addKeyListener(new KeyAdapter() {
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

        lblRG.setBounds(50, 80, lblRG.getText().length()*8, 20);
        txtRG.setBounds(120, 80, 300, 20);
        txtRG.addKeyListener(new KeyAdapter() {
            @Override
            public void keyTyped(KeyEvent e) {
                char c = e.getKeyChar();
                if(c == KeyEvent.VK_ENTER){
                    btnPaciente.doClick();
                }
            }
        });

        lblNascimento.setBounds(50, 110, lblNascimento.getText().length()*8, 20);
        txtNascimento.setBounds(120, 110, 300, 20);
        txtNascimento.addKeyListener(new KeyAdapter() {
            @Override
            public void keyTyped(KeyEvent e) {
                char c = e.getKeyChar();
                if(c == KeyEvent.VK_ENTER){
                    btnPaciente.doClick();
                }
            }
        });

        lblSexo.setBounds(50, 140, lblSexo.getText().length()*8, 20);
        txtSexo.setBounds(120, 140, 300, 20);
        txtSexo.addKeyListener(new KeyAdapter() {
            @Override
            public void keyTyped(KeyEvent e) {
                char c = e.getKeyChar();
                if(c == KeyEvent.VK_ENTER){
                    btnPaciente.doClick();
                }
            }
        });

        lblEmail.setBounds(50, 170, lblEmail.getText().length()*8, 20);
        txtEmail.setBounds(120, 170, 300, 20);
        txtEmail.addKeyListener(new KeyAdapter() {
            @Override
            public void keyTyped(KeyEvent e) {
                char c = e.getKeyChar();
                if(c == KeyEvent.VK_ENTER){
                    btnPaciente.doClick();
                }
            }
        });

        lblTelefone.setBounds(50, 200, lblTelefone.getText().length()*8, 20);
        txtTelefone.setBounds(120, 200, 300, 20);
        txtTelefone.addKeyListener(new KeyAdapter() {
            @Override
            public void keyTyped(KeyEvent e) {
                char c = e.getKeyChar();
                if(c == KeyEvent.VK_ENTER){
                    btnPaciente.doClick();
                }
            }
        });

        lblEndereco.setBounds(50, 230, lblEndereco.getText().length()*8, 20);
        txtEndereco.setBounds(120, 230, 300, 20);
        txtEndereco.addKeyListener(new KeyAdapter() {
            @Override
            public void keyTyped(KeyEvent e) {
                char c = e.getKeyChar();
                if(c == KeyEvent.VK_ENTER){
                    btnPaciente.doClick();
                }
            }
        });

        btnPaciente.setBounds(300, 260, 120, 20);
        btnPaciente.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                String nome = txtNome.getText();
                String cpf = txtCPF.getText();
                String rg = txtRG.getText();
                String nasc = txtNascimento.getText();
                String sexo = txtSexo.getText();
                String email = txtEmail.getText();
                String telefone = txtTelefone.getText();
                String endereco = txtEndereco.getText();

                if(PacientesControl.validarCamposPacientes(nome, cpf, rg, nasc, sexo, email, telefone, endereco)){
                    PacientesControl.cadastrarPacientes(nome, cpf, rg, nasc, sexo, email, telefone, endereco);

                    txtNome.setText("");
                    txtCPF.setText("");
                    txtRG.setText("");
                    txtNascimento.setText("");
                    txtSexo.setText("");
                    txtEmail.setText("");
                    txtTelefone.setText("");
                    txtEndereco.setText("");

                    return;
                }

                JOptionPane.showMessageDialog(null, "Preencha todos os campos!");
            }
        });

        framePacientes.setVisible(true);

    }
}
