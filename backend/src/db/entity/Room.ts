import {
  Column,
  Entity,
  JoinColumn,
  ManyToOne,
  OneToMany,
  PrimaryGeneratedColumn,
  Relation,
} from "typeorm";
import { Restaurant } from "./Restaurant.js";
import { Table } from "./Table.js";

@Entity()
export class Room {
  @PrimaryGeneratedColumn()
  id: number;

  @Column()
  tableAmount: number;

  @Column()
  name: string;

  @Column()
  state: number;

  @Column()
  terrace: boolean;

  @OneToMany(() => Table, (table) => table.room,{
    cascade: ['update', 'remove'],
  })
  @JoinColumn({ name: "table_id"})
  table: Table[];

  @ManyToOne(() => Restaurant, (restaurant) => restaurant.room,{
    cascade: ['remove', 'update']
  })
  @JoinColumn({ name: "restaurant_id"})
  restaurant: Restaurant;
}
