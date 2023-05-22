import {
  Column,
  Entity,
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

  @OneToMany(() => Table, (table) => table.room)
  table: Table[];

  @ManyToOne(() => Restaurant, (restaurant) => restaurant.room)
  restaurant: Relation<Restaurant>;
}
