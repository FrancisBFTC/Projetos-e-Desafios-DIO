package dio.aula_spring_data_jpa.repository;

import dio.aula_spring_data_jpa.model.User;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Component;

@Component
public interface UserRepository extends JpaRepository<User, Integer> {

}
