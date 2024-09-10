package br.com.entity;

import java.util.ArrayList;

public class Dados {
    public TipoUnidades[] tipoUnidades = new TipoUnidades[100];

    public Dados(){
        for(int i = 0; i<100; i++){
            tipoUnidades[i] = new TipoUnidades();
        }
    }

    public TipoUnidades[] getDados(){
        return tipoUnidades;
    }
}
