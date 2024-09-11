package br.com.entity;

public class Estabelecimentos {
    public int codigo_cnes;
    public long numero_cnpj_entidade;
    public String nome_razao_social;
    public String descricao_turno_atendimento;

    public int getCodigo_cnes() {
        return codigo_cnes;
    }

    public void setCodigo_cnes(int codigo_cnes) {
        this.codigo_cnes = codigo_cnes;
    }

    public long getNumero_cnpj_entidade() {
        return numero_cnpj_entidade;
    }

    public void setNumero_cnpj_entidade(long numero_cnpj_entidade) {
        this.numero_cnpj_entidade = numero_cnpj_entidade;
    }

    public String getNome_razao_social() {
        return nome_razao_social;
    }

    public void setNome_razao_social(String nome_razao_social) {
        this.nome_razao_social = nome_razao_social;
    }

    public String getDescricao_turno_atendimento() {
        return descricao_turno_atendimento;
    }

    public void setDescricao_turno_atendimento(String descricao_turno_atendimento) {
        this.descricao_turno_atendimento = descricao_turno_atendimento;
    }

}
