package com.HttpSoftware;

import java.io.IOException;
import java.net.http.HttpClient;
import java.net.http.HttpRequest;

public class PostRequest {

	public static final String URL_POST = "http://httpbin.org/forms/post";
	public static final String FILE_JSON = "C://arquivo.json";

	public static void main(String[] args) throws IOException, InterruptedException {

		// Cliente HTTP
		HttpClient client = HttpClient.newHttpClient();

		// Cria a requisição
		// POST retorna 403 - não permitido, apenas tirar para
		// usar por padrão o GET
		HttpRequest request = HttpRequest.newBuilder()
				.POST(HttpRequest.BodyPublishers.ofFile(Path.of(FILE_JSON)))
				.timeout(Duration.ofSeconds(10))
				.uri(URI.create(URL_POST))
				.build();

		// Enviando uma solicitação assíncrona e imprimindo
		client.sendAsync(request.BodyHandlers.ofString())
			 .thenApply(HttpResponse::body)
			 .thenAccept(System.out::println)
			 .join();

	}

}