package br.com.entity;

public class TipoUnidades {
    public int codigo_tipo_unidade;
    public String descricao_tipo_unidade;

    public TipoUnidades() {
        this.codigo_tipo_unidade = 0;
        this.descricao_tipo_unidade = "";
    }

    public int getCodigo_tipo_unidade() {
        return codigo_tipo_unidade;
    }

    public void setCodigo_tipo_unidade(int codigo_tipo_unidade) {
        this.codigo_tipo_unidade = codigo_tipo_unidade;
    }

    public String getDescricao_tipo_unidade() {
        return descricao_tipo_unidade;
    }

    public void setDescricao_tipo_unidade(String descricao_tipo_unidade) {
        this.descricao_tipo_unidade = descricao_tipo_unidade;
    }

}
