package br.com.control;

import br.com.entity.Pedidos;

import javax.swing.*;

public class PedidosControl {
    private static Pedidos[] pedidos;
    private static int index = 0;

    // Implementando o padrão Singleton (Design Patterns)
    public static Pedidos[] pedidosInit(){
        if(getPedidos() == null)
            pedidos = new Pedidos[10];

        return pedidos;
    }

    public static Pedidos[] getPedidos(){
        return pedidos;
    }

    public static boolean validarCamposPedidos(String paciente, String data, String hora, String produto,
                                            String descricao, String quantidade, String valor){
        if(paciente.isEmpty() || data.isEmpty() || hora.isEmpty() || produto.isEmpty() || descricao.isEmpty()
                || quantidade.isEmpty() || valor.isEmpty()){
            return false;
        }

        return true;
    }

    public static void cadastrarPedidos(String paciente, String data, String hora, String produto,
                                        String descricao, String quantidade, String valor){
        pedidos[index] = new Pedidos();
        pedidos[index].setIdPedido(index);
        pedidos[index].setNomePaciente(paciente);
        pedidos[index].setDataPedido(data);
        pedidos[index].setHoraPedido(hora);
        pedidos[index].setProdutoPedido(produto);
        pedidos[index].setDescricaoPedido(descricao);
        pedidos[index].setQuantidadePedido(Integer.parseInt(quantidade));
        pedidos[index].setValorPedido(Double.parseDouble(valor));

        System.out.println("Pedido " + index + " cadastrado com sucesso!");
        index++;
    }

    public static void listarPedidosConsole(){
        for(int i = 0; i < index; i++){
            System.out.println("Pedido Nª " + i + " : " + pedidos[i].getIdPedido());
            System.out.println("Paciente: " + pedidos[i].getNomePaciente());
            System.out.println("Data Pedido : " + pedidos[i].getDataPedido().toString());
            System.out.println("Hora Pedido : " + pedidos[i].getHoraPedido().toString());
            System.out.println("Produto Pedido : " + pedidos[i].getProdutoPedido());
            System.out.println("Descricao Pedido : " + pedidos[i].getDescricaoPedido());
            System.out.println("Quantidade Pedido : " + pedidos[i].getQuantidadePedido());
            System.out.println("Valor Pedido : " + pedidos[i].getValorPedido());
            System.out.println();
        }
    }

    public static void listarPedidosGUI(JPanel listarPanel, JLabel[] labelsNumPedido, JLabel[] labelsPaciente, JLabel[] labelsData,
                                          JLabel[] labelsHora, JLabel[] labelsProduto, JLabel[] labelsDesc, JLabel[] labelsQuant,
                                          JLabel[] labelsValor, int pos_y){
        for(int i = 0; i < index; i++){
            labelsNumPedido[i] = new JLabel();
            labelsNumPedido[i].setText("Pedido Nª: " + pedidos[i].getIdPedido());
            labelsNumPedido[i].setBounds(20, pos_y+=20, labelsNumPedido[i].getText().length() * 8, 20);
            listarPanel.add(labelsNumPedido[i]);

            labelsPaciente[i] = new JLabel();
            labelsPaciente[i].setText("Paciente: " + pedidos[i].getNomePaciente());
            labelsPaciente[i].setBounds(20, pos_y+=20, labelsPaciente[i].getText().length() * 8, 20);
            listarPanel.add(labelsPaciente[i]);

            labelsData[i] = new JLabel();
            labelsData[i].setText("Data: " + pedidos[i].getDataPedido().toString());
            labelsData[i].setBounds(20, pos_y+=20, labelsData[i].getText().length()  * 8, 20);
            listarPanel.add(labelsData[i]);

            labelsHora[i] = new JLabel();
            labelsHora[i].setText("Hora: " + pedidos[i].getHoraPedido().toString());
            labelsHora[i].setBounds(20, pos_y+=20, labelsHora[i].getText().length()  * 8, 20);
            listarPanel.add(labelsHora[i]);

            labelsProduto[i] = new JLabel();
            labelsProduto[i].setText("Produto: " + pedidos[i].getProdutoPedido());
            labelsProduto[i].setBounds(20, pos_y+=20, labelsProduto[i].getText().length()  * 8, 20);
            listarPanel.add(labelsProduto[i]);

            labelsDesc[i] = new JLabel();
            labelsDesc[i].setText("Descricao: " + pedidos[i].getDescricaoPedido());
            labelsDesc[i].setBounds(20, pos_y+=20, labelsDesc[i].getText().length()  * 8, 20);
            listarPanel.add(labelsDesc[i]);

            labelsQuant[i] = new JLabel();
            labelsQuant[i].setText("Quantidade: " + pedidos[i].getQuantidadePedido());
            labelsQuant[i].setBounds(20, pos_y+=20, labelsQuant[i].getText().length()  * 8, 20);
            listarPanel.add(labelsQuant[i]);

            labelsValor[i] = new JLabel();
            labelsValor[i].setText("Valor: " + pedidos[i].getValorPedido());
            labelsValor[i].setBounds(20, pos_y+=20, labelsValor[i].getText().length()  * 8, 20);
            listarPanel.add(labelsValor[i]);

            pos_y += 10;
        }
    }
}
