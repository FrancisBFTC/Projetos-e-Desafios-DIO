package br.com.control;

import br.com.entity.Estoque;

import javax.swing.*;

public class EstoqueControl {

    private static Estoque[] estoque;
    private static int index = 0;

    // Implementando o padrão Singleton (Design Pattern)
    public static Estoque[] estoqueInit(){
        if(getEstoque() == null)
            estoque = new Estoque[10];

        return estoque;
    }

    public static Estoque[] getEstoque() {
        return estoque;
    }

    public static double getPrecoTotal(Estoque estoque){
        return estoque.getPreco() * estoque.getQuantidade();
    }

    public static double getPrecoTotalEstoques(){
        int valorTotal = 0;
        for(int i = 0; estoque[i] instanceof Estoque; i++){
            valorTotal += getPrecoTotal(estoque[i]);
        }
        return valorTotal;
    }

    public static boolean validarCamposEstoque(String name, String desc, String quant, String preco){
        if(name.isEmpty() || desc.isEmpty() || quant.isEmpty() || preco.isEmpty()){
            System.out.println("Preencha todos os campos!");
            return false;
        }

        return true;
    }

    public static void cadastrarEstoque(String nome, String desc, String quant, String preco){
        estoque[index] = new Estoque();
        estoque[index].setId(index);
        estoque[index].setNome(nome);
        estoque[index].setDescricao(desc);
        estoque[index].setQuantidade(Integer.parseInt(quant));
        estoque[index].setPreco(Double.parseDouble(preco));

        System.out.println("Estoque " + index + " cadastrado com sucesso!");
        index++;
    }

    public static void listarEstoqueConsole(){
        for (int i = 0; i < index; i++) {
            System.out.println("Nome do Estoque: " + estoque[i].getNome());
            System.out.println("Descricao: " + estoque[i].getDescricao());
            System.out.println("Quantidade: " + estoque[i].getQuantidade());
            System.out.println("Preço: " + estoque[i].getPreco());
            System.out.println("Preco Total: " + EstoqueControl.getPrecoTotal(estoque[i]));
            System.out.println();
        }
    }

    public static void listarEstoqueGUI(JPanel listarPanel, JLabel[] labelsNome, JLabel[] labelsDesc, JLabel[] labelsQuant, JLabel[] labelsPreco,
                                        int pos_y){
        for(int i = 0; i < index; i++){
            labelsNome[i] = new JLabel();
            labelsNome[i].setText("Nome: " + estoque[i].getNome());
            labelsNome[i].setBounds(20, pos_y+=20, labelsNome[i].getText().length() * 8, 20);
            listarPanel.add(labelsNome[i]);

            labelsDesc[i] = new JLabel();
            labelsDesc[i].setText("Descrição: " + estoque[i].getDescricao());
            labelsDesc[i].setBounds(20, pos_y+=20, labelsDesc[i].getText().length() * 8, 20);
            listarPanel.add(labelsDesc[i]);

            labelsQuant[i] = new JLabel();
            labelsQuant[i].setText("Quantidade: " + estoque[i].getQuantidade() + "");
            labelsQuant[i].setBounds(20, pos_y+=20, labelsQuant[i].getText().length()  * 8, 20);
            listarPanel.add(labelsQuant[i]);

            labelsPreco[i] = new JLabel();
            labelsPreco[i].setText("Preço: " + estoque[i].getPreco() + "");
            labelsPreco[i].setBounds(20, pos_y+=20, labelsPreco[i].getText().length()  * 8, 20);
            listarPanel.add(labelsPreco[i]);

            pos_y += 10;
        }
    }
}
