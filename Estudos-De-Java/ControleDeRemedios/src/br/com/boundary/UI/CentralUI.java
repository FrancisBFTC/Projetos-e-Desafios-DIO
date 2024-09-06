package br.com.boundary.UI;

import javax.swing.*;

public class CentralUI {
    private JFrame frameCentral;
    private JPanel panelCentral;

    public CentralUI(String title) {
        frameCentral = new JFrame();
        panelCentral = new JPanel();

        panelCentral.setLayout(null);
        frameCentral.setBounds(0, 0, 800, 600);
        frameCentral.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frameCentral.setTitle(title);
        frameCentral.setLocationRelativeTo(null);
        frameCentral.add(panelCentral);

        frameCentral.setVisible(true);

        // Verificar se o usuário realmente quer fechar
        /*
        frameLogin.addWindowListener(new WindowAdapter() {
            public void windowClosing(WindowEvent e) {
                JDialog dialog = new JDialog();
                dialog.setLocationRelativeTo(null);
                dialog.setVisible(true);
            }
        });
         */
    }
}
