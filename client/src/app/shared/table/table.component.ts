import { Component, OnInit } from '@angular/core';
import { SocketService } from '../socket.service';

@Component({
  selector: 'app-table',
  templateUrl: './table.component.html',
  styleUrls: ['./table.component.scss'],
})
export class TableComponent implements OnInit {
  users: any[] = [];

  constructor(private socketService: SocketService) {}

  ngOnInit(): void {
    const socketKey: string = 'update';

    this.socketService.listen(socketKey).subscribe((x) => {
      const socketData = x[socketKey];
      if (!socketData) return;
      this.users.push(socketData);
    });
  }
}
