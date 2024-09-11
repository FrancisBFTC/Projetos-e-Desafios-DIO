package br.com.boundary.UI;

import br.com.control.EstoqueControl;
import br.com.control.PacientesControl;
import br.com.control.PedidosControl;

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
    private JButton btnListarEstoque;
    private JButton btnListarPacientes;
    private JButton btnListarPedidos;


    public CentralUI(String title) {
        frameCentral = new JFrame();
        panelCentral = new JPanel();
        frameCentral.setTitle(title);
        btnEstoque = new JButton("Estoque");
        btnPacientes = new JButton("Pacientes");
        btnPedidos = new JButton("Pedidos");
        btnListarEstoque = new JButton("Listar Estoque");
        btnListarPacientes = new JButton("Listar Pacientes");
        btnListarPedidos = new JButton("Listar Pedidos");

        panelCentral.setBorder(BorderFactory.createTitledBorder("Medicamentos"));
        panelCentral.setLayout(null);
        panelCentral.setBackground(Color.LIGHT_GRAY);
        panelCentral.setSize(310, 210);
        panelCentral.setLocation(20, 20);

        //panelCentral.setBounds(20, 20, 310, 210);
        //panelCentral.setBorder(BorderFactory.createLineBorder(Color.BLACK));

        panelCentral.add(btnEstoque);
        panelCentral.add(btnPacientes);
        panelCentral.add(btnPedidos);
        panelCentral.add(btnListarPacientes);
        panelCentral.add(btnListarPedidos);
        panelCentral.add(btnListarEstoque);


        frameCentral.setBounds(0, 0, 800, 600);
        frameCentral.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frameCentral.setTitle(title);
        frameCentral.setLocationRelativeTo(null);
        frameCentral.add(panelCentral);

        frameCentral.setVisible(true);

        btnEstoque.setBounds(20, 20, 100, 50);
        btnPacientes.setBounds(20, 100, 100, 50);
        btnPedidos.setBounds(20, 180, 100, 50);
        btnListarEstoque.setBounds(150, 20, 150, 50);
        btnListarPacientes.setBounds(150, 100, 150, 50);
        btnListarPedidos.setBounds(150, 180, 150, 50);

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

        btnListarEstoque.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                if(EstoqueControl.getEstoque() != null){
                    double orcamento = EstoqueControl.getPrecoTotalEstoques();
                    System.out.println("O orçamento de remédios deu R$" + orcamento + " reais");
                    EstoqueControl.listarEstoqueConsole();
                    janelaListarEstoque();
                }else{
                    JOptionPane.showMessageDialog(null, "Nenhum estoque cadastrado!");
                }
            }
        });

        btnListarPacientes.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {

                if(PacientesControl.getPacientes() != null){
                    PacientesControl.listarPacientesConsole();
                    janelaListarPacientes();
                }else{
                    JOptionPane.showMessageDialog(null, "Nenhum paciente cadastrado!");
                }
            }
        });

        btnListarPedidos.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {

                if(PedidosControl.getPedidos() != null){
                    PedidosControl.listarPedidosConsole();
                    janelaListarPedidos();
                }else{
                    JOptionPane.showMessageDialog(null, "Nenhum pedido cadastrado!");
                }
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

    public void janelaListarPacientes(){
        JFrame listarFrame = new JFrame();
        JPanel listarPanel = new JPanel();
        listarFrame.setSize(500, 400);
        listarPanel.setSize(500, 400);
        listarPanel.setLayout(null);
        listarFrame.setLocationRelativeTo(null);
        listarFrame.add(listarPanel);

        JLabel[] labelsNome = new JLabel[PacientesControl.getPacientes().length];
        JLabel[] labelsCpf = new JLabel[PacientesControl.getPacientes().length];
        JLabel[] labelsRg = new JLabel[PacientesControl.getPacientes().length];
        JLabel[] labelsNasc = new JLabel[PacientesControl.getPacientes().length];
        JLabel[] labelsSexo = new JLabel[PacientesControl.getPacientes().length];
        JLabel[] labelsEmail = new JLabel[PacientesControl.getPacientes().length];
        JLabel[] labelsTelefone = new JLabel[PacientesControl.getPacientes().length];
        JLabel[] labelsEndereco = new JLabel[PacientesControl.getPacientes().length];

        int pos_y = 20;

        PacientesControl.listarPacientesGUI(listarPanel, labelsNome, labelsCpf, labelsRg, labelsNasc, labelsSexo,
                labelsEmail, labelsTelefone, labelsEndereco, pos_y);


        listarFrame.setVisible(true);
    }

    public void janelaListarPedidos(){
        JFrame listarFrame = new JFrame();
        JPanel listarPanel = new JPanel();
        listarFrame.setSize(500, 400);
        listarPanel.setSize(500, 400);
        listarPanel.setLayout(null);
        listarFrame.setLocationRelativeTo(null);
        listarFrame.add(listarPanel);

        JLabel[] labelsNumPedido = new JLabel[PedidosControl.getPedidos().length];
        JLabel[] labelsPaciente = new JLabel[PedidosControl.getPedidos().length];
        JLabel[] labelsData = new JLabel[PedidosControl.getPedidos().length];
        JLabel[] labelsHora = new JLabel[PedidosControl.getPedidos().length];
        JLabel[] labelsProduto = new JLabel[PedidosControl.getPedidos().length];
        JLabel[] labelsDesc = new JLabel[PedidosControl.getPedidos().length];
        JLabel[] labelsQuant = new JLabel[PedidosControl.getPedidos().length];
        JLabel[] labelsValor = new JLabel[PedidosControl.getPedidos().length];

        int pos_y = 20;

        PedidosControl.listarPedidosGUI(listarPanel, labelsNumPedido, labelsPaciente, labelsData, labelsHora, labelsProduto,
                labelsDesc, labelsQuant, labelsValor, pos_y);


        listarFrame.setVisible(true);
    }

    public void janelaListarEstoque(){
        JFrame listarFrame = new JFrame();
        JPanel listarPanel = new JPanel();
        listarFrame.setSize(500, 300);
        listarPanel.setSize(500, 300);
        listarPanel.setLayout(null);
        listarFrame.setLocationRelativeTo(null);
        listarFrame.add(listarPanel);

        JLabel[] labelsNome = new JLabel[EstoqueControl.getEstoque().length];
        JLabel[] labelsDesc = new JLabel[EstoqueControl.getEstoque().length];
        JLabel[] labelsQuant = new JLabel[EstoqueControl.getEstoque().length];
        JLabel[] labelsPreco = new JLabel[EstoqueControl.getEstoque().length];

        int pos_y = 20;

        EstoqueControl.listarEstoqueGUI(listarPanel, labelsNome, labelsDesc, labelsQuant, labelsPreco, pos_y);

        listarFrame.setVisible(true);
    }
}
