const HomeView = () => import("../views/HomeView");
const NotFoundView = () => import("../views/NotFoundView");

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView,
  },
  {
    path: '/:pathMatch(.*)*',
    name: 'not_found',
    component: NotFoundView,
  },
];

export default routes;
