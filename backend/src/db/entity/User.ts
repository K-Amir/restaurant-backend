import { Column, Entity, PrimaryGeneratedColumn } from "typeorm";

@Entity()
export class User {
  @PrimaryGeneratedColumn()
  id: number;

  @Column()
  username: string;

  @Column({
    unique: true,
  })
  phoneNumber: string;

  @Column({
    unique: true,
    nullable: true,
  })
  email: string;

  @Column()
  password: string;

  @Column({
    nullable: true,
  })
  profileImage: string;

  @Column()
  device: string;

  @Column()
  token: string;
}
