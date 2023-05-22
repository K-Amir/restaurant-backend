import {
  Column,
  Entity,
  ManyToOne,
  PrimaryGeneratedColumn,
  Relation,
} from "typeorm";
import { Restaurant } from "./Restaurant.js";
import { Room } from "./Room.js";

@Entity()
export class Table {
  @PrimaryGeneratedColumn()
  id: number;

  @Column()
  state: number;

  @ManyToOne(() => Room, (room) => room.table)
  room: Room;

  @ManyToOne(() => Restaurant, (restaurant) => restaurant.table)
  restaurant: Relation<Restaurant>;
}
