package br.com.dio;

import br.com.dio.dto.UserDTO;
import br.com.dio.model.UserModel;
import br.com.dio.mapper.UserMapper;
import org.mapstruct.factory.Mappers;

import java.time.LocalDate;

//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
public class Main {

    private final static UserMapper mapper = Mappers.getMapper(UserMapper.class);

    public static void main(String[] args) {
        var model = new UserModel();
        model.setCode(1);
        model.setUserName("James");
        model.setBirthday(LocalDate.now().minusYears(20));
        System.out.println(mapper.toDTO(model));

        var dto = new UserDTO();
        dto.setId(2);
        dto.setUser("Maria");
        dto.setBirthday(LocalDate.now().minusYears(30));
        System.out.println(mapper.toModel(dto));
    }
}