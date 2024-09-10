package br.com.control;

import br.com.entity.Pedidos;

import java.sql.Time;
import java.sql.Timestamp;
import java.util.Date;

public class PedidosControl {
    public static Pedidos[] pedidos;
    private static int index = 0;

    public static void pedidosInit(){
        pedidos = new Pedidos[10];
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
        pedidos[index].setDataPedido(new Date(data));
        pedidos[index].setHoraPedido(new Time(Long.parseLong(hora)));
        pedidos[index].setProdutoPedido(produto);
        pedidos[index].setDescricaoPedido(descricao);
        pedidos[index].setQuantidadePedido(Integer.parseInt(quantidade));
        pedidos[index].setValorPedido(Double.parseDouble(valor));

        System.out.println("Pedido " + index + " cadastrado com sucesso!");
        index++;
    }
}
