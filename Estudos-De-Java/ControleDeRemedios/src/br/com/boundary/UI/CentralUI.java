package br.com.boundary.UI;

import javax.swing.*;
import javax.swing.plaf.BorderUIResource;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.WindowAdapter;
import java.awt.event.WindowEvent;

public class CentralUI {
    private JFrame frameCentral;
    private JPanel panelCentral;
    private JButton btnEstoque;
    private JButton btnPacientes;
    private JButton btnPedidos;

    public CentralUI(String title) {
        frameCentral = new JFrame();
        panelCentral = new JPanel();
        frameCentral.setTitle(title);
        btnEstoque = new JButton("Estoque");
        btnPacientes = new JButton("Pacientes");
        btnPedidos = new JButton("Pedidos");

        panelCentral.add(btnEstoque, BorderLayout.CENTER);
        panelCentral.add(btnPacientes, BorderLayout.CENTER);
        panelCentral.add(btnPedidos, BorderLayout.CENTER);

        panelCentral.setLayout( new BorderLayout() );
        frameCentral.setBounds(0, 0, 800, 600);
        frameCentral.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frameCentral.setTitle(title);
        frameCentral.setLocationRelativeTo(null);
        frameCentral.add(panelCentral);

        frameCentral.setVisible(true);

        btnEstoque.setBounds(20, 20, 100, 50);
        btnPacientes.setBounds(130, 20, 100, 50);
        btnPedidos.setBounds(240, 20, 100, 50);

        btnEstoque.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                EstoqueUI estoque = new EstoqueUI("Controle de Remédios - Estoque");
            }
        });

        btnPacientes.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                PacientesUI pacientesUI = new PacientesUI("Controle de Remédios - Pacientes");
            }
        });

        btnPedidos.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                PedidosUI pedidosUI = new PedidosUI("Controle de Remedios - Pedidos");
            }
        });

        // Verificar se o usuário realmente quer fechar

        frameCentral.addWindowListener(new WindowAdapter() {
            public void windowClosing(WindowEvent e) {
                int confirm = JOptionPane.showConfirmDialog(null, "Deseja realmente fechar?");
                if(confirm == JOptionPane.YES_OPTION) {
                    System.exit(0);
                }
            }
        });

    }
}
