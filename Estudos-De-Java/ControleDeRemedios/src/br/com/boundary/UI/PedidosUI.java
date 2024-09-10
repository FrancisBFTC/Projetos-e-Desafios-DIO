package br.com.boundary.UI;

import br.com.control.PedidosControl;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyAdapter;
import java.awt.event.KeyEvent;

public class PedidosUI {
    private JFrame framePedidos;
    private JPanel panelPedidos;

    private JLabel lblPaciente;
    private JLabel lblData;
    private JLabel lblHora;
    private JLabel lblProduto;
    private JLabel lblDescricao;
    private JLabel lblQuantidade;
    private JLabel lblValor;
    private JTextField txtPaciente;
    private JTextField txtData;
    private JTextField txtHora;
    private JTextField txtProduto;
    private JTextField txtDescricao;
    private JTextField txtQuantidade;
    private JTextField txtValor;
    private JButton btnPedido;

    public PedidosUI(String title){

        PedidosControl.pedidosInit();

        framePedidos = new JFrame(title);
        panelPedidos = new JPanel();
        lblPaciente = new JLabel("Paciente:");
        lblData = new JLabel("Data:");
        lblHora = new JLabel("Hora:");
        lblProduto = new JLabel("Produto:");
        lblDescricao = new JLabel("Descricao:");
        lblQuantidade = new JLabel("Quantidade:");
        lblValor = new JLabel("Valor:");
        txtPaciente = new JTextField();
        txtData = new JTextField();
        txtHora = new JTextField();
        txtProduto = new JTextField();
        txtDescricao = new JTextField();
        txtQuantidade = new JTextField();
        txtValor = new JTextField();
        btnPedido = new JButton("Cadastrar");

        panelPedidos.add(lblPaciente);
        panelPedidos.add(lblData);
        panelPedidos.add(lblHora);
        panelPedidos.add(lblProduto);
        panelPedidos.add(lblDescricao);
        panelPedidos.add(lblQuantidade);
        panelPedidos.add(lblValor);
        panelPedidos.add(txtPaciente);
        panelPedidos.add(txtData);
        panelPedidos.add(txtHora);
        panelPedidos.add(txtProduto);
        panelPedidos.add(txtDescricao);
        panelPedidos.add(txtQuantidade);
        panelPedidos.add(txtValor);

        panelPedidos.add(btnPedido);

        panelPedidos.setLayout(new BorderLayout());
        framePedidos.setSize(500, 300);
        framePedidos.setLocationRelativeTo(null);
        framePedidos.setResizable(false);

        framePedidos.add(panelPedidos, BorderLayout.CENTER);

        lblPaciente.setBounds(50, 20, lblPaciente.getText().length()*8, 20);
        txtPaciente.setBounds(120, 20, 300, 20);
        txtPaciente.addKeyListener(new KeyAdapter() {
            @Override
            public void keyTyped(KeyEvent e) {
                char c = e.getKeyChar();
                if(c == KeyEvent.VK_ENTER){
                    btnPedido.doClick();
                }
            }
        });

        lblData.setBounds(50, 50, lblData.getText().length()*8, 20);
        txtData.setBounds(120, 50, 300, 20);
        txtData.addKeyListener(new KeyAdapter() {
            @Override
            public void keyTyped(KeyEvent e) {
                char c = e.getKeyChar();
                if(c == KeyEvent.VK_ENTER){
                    btnPedido.doClick();
                }
            }
        });

        lblHora.setBounds(50, 80, lblHora.getText().length()*8, 20);
        txtHora.setBounds(120, 80, 300, 20);
        txtHora.addKeyListener(new KeyAdapter() {
            @Override
            public void keyTyped(KeyEvent e) {
                char c = e.getKeyChar();
                if(c == KeyEvent.VK_ENTER){
                    btnPedido.doClick();
                }
            }
        });

        lblProduto.setBounds(50, 110, lblProduto.getText().length()*8, 20);
        txtProduto.setBounds(120, 110, 300, 20);
        txtProduto.addKeyListener(new KeyAdapter() {
            @Override
            public void keyTyped(KeyEvent e) {
                char c = e.getKeyChar();
                if(c == KeyEvent.VK_ENTER){
                    btnPedido.doClick();
                }
            }
        });

        lblDescricao.setBounds(50, 140, lblDescricao.getText().length()*8, 20);
        txtDescricao.setBounds(120, 140, 300, 20);
        txtDescricao.addKeyListener(new KeyAdapter() {
            @Override
            public void keyTyped(KeyEvent e) {
                char c = e.getKeyChar();
                if(c == KeyEvent.VK_ENTER){
                    btnPedido.doClick();
                }
            }
        });

        lblQuantidade.setBounds(50, 170, lblQuantidade.getText().length()*8, 20);
        txtQuantidade.setBounds(120, 170, 300, 20);
        txtQuantidade.addKeyListener(new KeyAdapter() {
           @Override
           public void keyTyped(KeyEvent e) {
               char c = e.getKeyChar();
               if(c == KeyEvent.VK_ENTER){
                   btnPedido.doClick();
               }
           }
        });

        lblValor.setBounds(50, 200, lblValor.getText().length()*8, 20);
        txtValor.setBounds(120, 200, 300, 20);
        txtValor.addKeyListener(new KeyAdapter() {
            @Override
            public void keyTyped(KeyEvent e) {
                char c = e.getKeyChar();
                if(c == KeyEvent.VK_ENTER){
                    btnPedido.doClick();
                }
            }
        });

        btnPedido.setBounds(300, 230, 120, 20);
        btnPedido.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                String paciente = txtPaciente.getText();
                String data = txtData.getText();
                String hora = txtHora.getText();
                String produto = txtProduto.getText();
                String descricao = txtDescricao.getText();
                String quantidade = txtQuantidade.getText();
                String valor = txtValor.getText();

                if(PedidosControl.validarCamposPedidos(paciente, data, hora, produto, descricao, quantidade, valor)){
                    PedidosControl.cadastrarPedidos(paciente, data, hora, produto ,descricao, quantidade, valor);

                    txtPaciente.setText("");
                    txtData.setText("");
                    txtHora.setText("");
                    txtProduto.setText("");
                    txtDescricao.setText("");
                    txtQuantidade.setText("");
                    txtValor.setText("");

                    return;
                }

                JOptionPane.showMessageDialog(null, "Preencha todos os campos!");
            }
        });

        framePedidos.setVisible(true);
    }
}
