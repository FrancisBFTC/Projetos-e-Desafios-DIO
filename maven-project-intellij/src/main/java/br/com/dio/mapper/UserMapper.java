package br.com.dio.mapper;
import br.com.dio.model.UserModel;
import br.com.dio.dto.UserDTO;
import org.mapstruct.Mapper;
import org.mapstruct.Mapping;

@Mapper
public interface UserMapper {

    @Mapping(target = "code", source = "id")
    @Mapping(target = "userName", source = "user")
    UserModel toModel(final UserDTO dto);

    @Mapping(target = "id", source = "code")
    @Mapping(target = "user", source = "userName")
    UserDTO toDTO(final UserModel model);
}
