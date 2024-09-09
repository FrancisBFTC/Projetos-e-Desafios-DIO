package br.com.boundary.UI;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyAdapter;
import java.awt.event.KeyEvent;

public class PedidosUI {
    private JFrame framePedidos;
    private JPanel panelPedidos;

    private JLabel lblPedido;
    private JLabel lblQuantidade;
    private JTextField txtPedido;
    private JTextField txtQuantidade;
    private JButton btnPedido;

    public PedidosUI(String title){
        framePedidos = new JFrame(title);
        panelPedidos = new JPanel();
        lblPedido = new JLabel("Pedido:");
        lblQuantidade = new JLabel("Quantidade:");
        txtPedido = new JTextField();
        txtQuantidade = new JTextField();
        btnPedido = new JButton("Cadastrar");

        panelPedidos.add(lblPedido);
        panelPedidos.add(lblQuantidade);
        panelPedidos.add(txtPedido);
        panelPedidos.add(txtQuantidade);
        panelPedidos.add(btnPedido);

        panelPedidos.setLayout(new BorderLayout());
        framePedidos.setSize(500, 300);
        framePedidos.setLocationRelativeTo(null);
        framePedidos.setResizable(false);

        framePedidos.add(panelPedidos, BorderLayout.CENTER);

        lblPedido.setBounds(50, 20, lblPedido.getText().length()*8, 20);
        txtPedido.setBounds(120, 20, 300, 20);
        txtPedido.addKeyListener(new KeyAdapter() {
            @Override
            public void keyTyped(KeyEvent e) {
                char c = e.getKeyChar();
                if(c == KeyEvent.VK_ENTER){
                    btnPedido.doClick();
                }
            }
        });

        lblQuantidade.setBounds(50, 50, lblQuantidade.getText().length()*8, 20);
        txtQuantidade.setBounds(120, 50, 300, 20);
        txtQuantidade.addKeyListener(new KeyAdapter() {
           @Override
           public void keyTyped(KeyEvent e) {
               char c = e.getKeyChar();
               if(c == KeyEvent.VK_ENTER){
                   btnPedido.doClick();
               }
           }
        });

        btnPedido.setBounds(120, 80, 120, 20);
        btnPedido.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {

            }
        });

        framePedidos.setVisible(true);
    }
}
