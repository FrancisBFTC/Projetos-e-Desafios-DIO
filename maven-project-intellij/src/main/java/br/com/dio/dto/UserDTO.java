package br.com.dio.dto;

import lombok.Data;
import java.time.LocalDate;

@Data
public class UserDTO {

    private int id;
    private String user;
    private LocalDate birthday;
}

