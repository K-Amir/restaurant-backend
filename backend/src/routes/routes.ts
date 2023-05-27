import { Router } from "express";
import userRouter from "./user/user.routes.js";
import restaurantRouter from "./restaurant/restaurant.routes.js";
import tableRouter from "./table/table.routes.js";

const apiRouter = Router();
const routes = Router();

routes.use("/api/v1", apiRouter);

apiRouter.use(userRouter);
apiRouter.use(restaurantRouter);
apiRouter.use(tableRouter);

export default routes;
