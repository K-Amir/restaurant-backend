import { Router } from "express";
import validateCreate from "../../validators/restaurants.validator.js";
import getAllRestaurants from "./get-all-restaurants.js";
import getRestaurantById from "./get-restaurant.js";
import deleteRestaurantById from "./delete-restaurant.js";
import createRestaurant from "./create-restaurant.js";

const router = Router();

router.get("/get_all_restaurants", getAllRestaurants);
router.get("/restaurants/:id", getRestaurantById);
router.delete("/restaurants/:id", deleteRestaurantById);
router.post("/restaurants", validateCreate, createRestaurant);

export default router;