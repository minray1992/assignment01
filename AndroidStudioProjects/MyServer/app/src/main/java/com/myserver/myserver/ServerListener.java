package com.myserver.myserver;

import java.io.IOException;
import java.net.ServerSocket;
import java.net.Socket;


public class ServerListener extends Thread {

    @Override
    public void run() {
        try {
            ServerSocket serverSocket = new ServerSocket(12345);
            while(true){
                //block
                Socket socket = serverSocket.accept();
                //build new connection
                //send socket to new thread
                ChatSocket cs = new ChatSocket(socket);
                cs.start();
                ChatManager.getChatManager().add(cs);
            }
        } catch (IOException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        }
    }




}
