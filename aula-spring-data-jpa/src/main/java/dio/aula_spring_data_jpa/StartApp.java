package dio.aula_spring_data_jpa;

import dio.aula_spring_data_jpa.repository.UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.stereotype.Component;
import dio.aula_spring_data_jpa.model.User;

@Component
public class StartApp implements CommandLineRunner {

    @Autowired
    private UserRepository userRepository;
    @Autowired
    private User user;
    @Override
    public void run(String... args) throws Exception {
        user.setName("BFTCorporations");
        user.setUsername("BFTC");
        user.setPassword("1234");

        userRepository.save(user);

        for (User u : userRepository.findAll()) {
            System.out.println(u);
        }
    }
}
