import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TableComponent } from './table/table.component';
import { TableModule } from 'primeng/table';
import { ContextMenuModule } from 'primeng/contextmenu';

@NgModule({
  declarations: [TableComponent],
  imports: [CommonModule, TableModule, ContextMenuModule],
  exports: [TableComponent],
})
export class SharedModule {}
