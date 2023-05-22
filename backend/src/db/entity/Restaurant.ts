import {
  Column,
  Entity,
  OneToMany,
  OneToOne,
  PrimaryGeneratedColumn,
} from "typeorm";
import { Table } from "./Table.js";
import { Room } from "./Room.js";
import { RestaurantProfile } from "./RestaurantProfile.js";

@Entity()
export class Restaurant {
  @PrimaryGeneratedColumn()
  id: number;

  @Column()
  restaurantName: string;

  @Column()
  email: string;

  @Column()
  password: string;

  @OneToMany(() => Table, (table) => table.restaurant)
  table: Table[];

  @OneToMany(() => Room, (room) => room.restaurant)
  room: Room[];

  @OneToOne(
    () => RestaurantProfile,
    (restaurantProfile) => restaurantProfile.restaurant
  )
  restaurantProfile: RestaurantProfile;
}
