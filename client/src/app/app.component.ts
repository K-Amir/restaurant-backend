import { Component, OnInit } from '@angular/core';
import { io } from 'socket.io-client';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.sass'],
})
export class AppComponent implements OnInit {
  title = 'client';

  ngOnInit(): void {
    const socket = io('http://localhost:3000');
    socket.on('update', (res) => {
      console.log(res);
    });
  }
}
