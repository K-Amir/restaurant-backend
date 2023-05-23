import { Component, OnInit } from '@angular/core';
import { SocketService } from '../socket.service';
import { UsersService } from '../users.service';
import { MenuItem } from 'primeng/api';
import * as XLSX from 'xlsx';
import { saveAs } from 'file-saver';

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
      label: 'Update',
      icon: 'pi pi-pencil',
    },
    {
      label: 'Delete',
      icon: 'pi pi-trash',
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
      this.users = [...this.users, socketData];
    });
  }

  exportToExcel() {
    const workbook = XLSX.utils.book_new();
    const worksheet = XLSX.utils.json_to_sheet(this.users);
    XLSX.utils.book_append_sheet(workbook, worksheet);
    const excelBuffer: any = XLSX.write(workbook, {
      bookType: 'xlsx',
      type: 'array',
    });
    const blob = new Blob([excelBuffer], {
      type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    });
    saveAs(blob, 'data.xlsx');
  }
}
