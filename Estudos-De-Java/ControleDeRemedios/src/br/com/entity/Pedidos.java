package br.com.entity;

import java.sql.Time;
import java.util.Date;

public class Pedidos {
    private int idPedido;
    private String nomePaciente;
    private String dataPedido;
    private String horaPedido;
    private String produtoPedido;
    private String descricaoPedido;
    private int quantidadePedido;
    private double valorPedido;

    public Pedidos() {
        this.idPedido = 0;
        this.nomePaciente = "";
        this.dataPedido = null;
        this.horaPedido = null;
        this.produtoPedido = "";
        this.descricaoPedido = "";
        this.quantidadePedido = 0;
        this.valorPedido = 0;
    }

    public Pedidos(int idPedido, String nomePaciente, String dataPedido, String horaPedido, String produtoPedido,
                   String descricaoPedido, int quantidadePedido, double valorPedido){
        this.idPedido = idPedido;
        this.nomePaciente = nomePaciente;
        this.dataPedido = dataPedido;
        this.horaPedido = horaPedido;
        this.produtoPedido = produtoPedido;
        this.descricaoPedido = descricaoPedido;
        this.quantidadePedido = quantidadePedido;
        this.valorPedido = valorPedido;
    }

    public int getIdPedido() {
        return idPedido;
    }

    public void setIdPedido(int idPedido) {
        this.idPedido = idPedido;
    }

    public String getNomePaciente() {
        return nomePaciente;
    }

    public void setNomePaciente(String nomePaciente) {
        this.nomePaciente = nomePaciente;
    }

    public String getDataPedido() {
        return dataPedido;
    }

    public void setDataPedido(String dataPedido) {
        this.dataPedido = dataPedido;
    }

    public String getHoraPedido() {
        return horaPedido;
    }

    public void setHoraPedido(String horaPedido) {
        this.horaPedido = horaPedido;
    }

    public String getProdutoPedido() {
        return produtoPedido;
    }

    public void setProdutoPedido(String produtoPedido) {
        this.produtoPedido = produtoPedido;
    }

    public String getDescricaoPedido() {
        return descricaoPedido;
    }

    public void setDescricaoPedido(String descricaoPedido) {
        this.descricaoPedido = descricaoPedido;
    }

    public int getQuantidadePedido() {
        return quantidadePedido;
    }

    public void setQuantidadePedido(int quantidadePedido) {
        this.quantidadePedido = quantidadePedido;
    }

    public double getValorPedido() {
        return valorPedido;
    }

    public void setValorPedido(double valorPedido) {
        this.valorPedido = valorPedido;
    }
}
