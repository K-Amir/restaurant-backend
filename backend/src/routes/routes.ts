import { Router } from "express";
import roomRouter from "./room/room.routes.js";
import userRouter from "./user/user.routes.js";
import tableRouter from "./table/table.routes.js";
import restaurantRouter from "./restaurant/restaurant.routes.js";
import bookingRouter from "./booking/booking.routes.js";
import opinionsRouter from "./opinion/opinion.routes.js";

const apiRouter = Router();
const routes = Router();

routes.use("/api/v1", apiRouter);

apiRouter.use(roomRouter);
apiRouter.use(userRouter);
apiRouter.use(tableRouter);
apiRouter.use(restaurantRouter);
apiRouter.use(bookingRouter)
apiRouter.use(opinionsRouter)

export default routes;
