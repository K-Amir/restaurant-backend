import { Component, OnInit } from '@angular/core';
import { SocketService } from '../socket.service';
import { UsersService } from '../users.service';
import { MenuItem } from 'primeng/api';

@Component({
  selector: 'app-table',
  templateUrl: './table.component.html',
  styleUrls: ['./table.component.scss'],
})
export class TableComponent implements OnInit {
  users: any[] = [];
  selectedItem: any;
  socketKey: string = 'update';
  items: MenuItem[] = [
    {
      label: 'Edit',
      icon: 'pi pi-fw pi-file',
    },
    {
      label: 'blahblah',
      icon: 'pi pi-fw pi-file',
    },
    {
      label: 'Eliminar',
      icon: 'pi pi-fw pi-file',
    },
    {
      label: 'Edit',
      icon: 'pi pi-fw pi-file',
    },
    {
      label: 'Edit',
      icon: 'pi pi-fw pi-file',
    },
  ];

  constructor(
    private socketService: SocketService,
    private usersService: UsersService
  ) {}

  ngOnInit(): void {
    this.loadUsers();
    this.socketListener();
  }

  loadUsers() {
    this.usersService.findAllUsers().subscribe((users: any) => {
      this.users = users;
    });
  }

  socketListener() {
    this.socketService.listen(this.socketKey).subscribe((x) => {
      const socketData = x[this.socketKey];
      if (!socketData) return;
      this.users.push(socketData);
    });
  }
}
