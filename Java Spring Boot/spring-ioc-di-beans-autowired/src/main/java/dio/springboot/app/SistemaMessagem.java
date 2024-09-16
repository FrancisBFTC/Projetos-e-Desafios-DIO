package dio.springboot.app;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Scope;
import org.springframework.stereotype.Component;

@Component
public class SistemaMessagem {
    @Autowired
    private Dados youtube;
    @Autowired
    private Dados threads;
    @Autowired
    private Dados standard;

    public void defineYoutube(){
        youtube.setCanal("KiddieOS Community");
        youtube.setArea("OSDev/CPU");
        youtube.setContato("bftcorporations@gmail.com");
        youtube.setRede("Youtube");
    }

    public void defineThreads(){
        threads.setCanal("KiddieOS Sys");
        threads.setArea("High/Low-Level Applications");
        threads.setContato("@kiddieos.sys");
        threads.setRede("Threads");
    }

    public void showYoutubeData(){
        System.out.println(youtube);
    }

    public void showThreadsData(){
        System.out.println(threads);
    }

    public void showStandardValues(){
        System.out.println(standard);
    }
}
