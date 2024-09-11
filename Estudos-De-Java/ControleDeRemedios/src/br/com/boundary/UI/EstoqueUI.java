package br.com.boundary.UI;

import br.com.control.EstoqueControl;
import br.com.entity.Estoque;

import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyAdapter;
import java.awt.event.KeyEvent;

public class EstoqueUI {
    private JFrame frameEstoque;
    private JPanel panelEstoque;
    private JTextField fieldName;
    private JTextField fieldDesc;
    private JTextField fieldQuant;
    private JTextField fieldPreco;
    private JLabel lblName;
    private JLabel lblDesc;
    private JLabel lblQuant;
    private JLabel lblPreco;
    private JButton cadastrarButton;
    private Estoque[] estoque;

    public EstoqueUI(String windowTitle) {

        estoque = EstoqueControl.estoqueInit();

        frameEstoque = new JFrame(windowTitle);
        panelEstoque = new JPanel();

        fieldName = new JTextField();
        fieldDesc = new JTextField();
        fieldQuant = new JTextField();
        fieldPreco = new JTextField();
        lblName = new JLabel("Nome:");
        lblDesc = new JLabel("Descrição:");
        lblQuant = new JLabel("Quantidade:");
        lblPreco = new JLabel("Preço:");

        cadastrarButton = new JButton();

        frameEstoque.add(panelEstoque);
        panelEstoque.setLayout(null);
        panelEstoque.add(fieldName);
        panelEstoque.add(fieldDesc);
        panelEstoque.add(fieldQuant);
        panelEstoque.add(fieldPreco);
        panelEstoque.add(lblName);
        panelEstoque.add(lblDesc);
        panelEstoque.add(lblQuant);
        panelEstoque.add(lblPreco);
        panelEstoque.add(cadastrarButton);

        frameEstoque.setSize(500, 300);
        frameEstoque.setLocationRelativeTo(null);
        frameEstoque.setResizable(false);

        lblName.setBounds(50, 50, 100, 20);
        fieldName.setBounds(120, 50, 300, 20);
        fieldName.addKeyListener(new KeyAdapter() {
            public void keyPressed(KeyEvent e) {
                if (e.getKeyCode() == KeyEvent.VK_ENTER) {
                    cadastrarButton.doClick();
                }
            }
        });

        lblDesc.setBounds(50, 80, 100, 20);
        fieldDesc.setBounds(120, 80, 300, 20);
        fieldDesc.addKeyListener(new KeyAdapter() {
            public void keyPressed(KeyEvent e) {
                if (e.getKeyCode() == KeyEvent.VK_ENTER) {
                    cadastrarButton.doClick();
                }
            }
        });

        lblQuant.setBounds(50, 110, 100, 20);
        fieldQuant.setBounds(120, 110, 300, 20);
        fieldQuant.addKeyListener(new KeyAdapter() {
            public void keyPressed(KeyEvent e) {
                if (e.getKeyCode() == KeyEvent.VK_ENTER) {
                    cadastrarButton.doClick();
                }
            }
        });

        lblPreco.setBounds(50, 140, 100, 20);
        fieldPreco.setBounds(120, 140, 300, 20);
        fieldPreco.addKeyListener(new KeyAdapter() {
            public void keyPressed(KeyEvent e) {
                if (e.getKeyCode() == KeyEvent.VK_ENTER) {
                    cadastrarButton.doClick();
                }
            }
        });

        cadastrarButton.setText("Cadastrar");
        cadastrarButton.setBounds(300, 170, 120, 20);
        cadastrarButton.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {

                String nome = fieldName.getText();
                String desc = fieldDesc.getText();
                String quant = fieldQuant.getText();
                String preco = fieldPreco.getText();


                if(EstoqueControl.validarCamposEstoque(nome, desc, quant, preco)){

                    EstoqueControl.cadastrarEstoque(nome, desc, quant, preco);

                    fieldName.setText("");
                    fieldDesc.setText("");
                    fieldQuant.setText("");
                    fieldPreco.setText("");

                    return;
                }

                JOptionPane.showMessageDialog(null, "Preencha todos os campos!");
            }
        });

        frameEstoque.setVisible(true);
    }

}
