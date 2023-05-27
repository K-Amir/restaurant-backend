import { Request, Response } from "express";
import { AppDataSource } from "../../db/data-source.js";
import { Restaurant } from "../../db/entity/Restaurant.js";

const restaurantRepo = AppDataSource.getRepository(Restaurant);

const updateRestaurantById = async (req: Request, res: Response) => {};

export default updateRestaurantById;
