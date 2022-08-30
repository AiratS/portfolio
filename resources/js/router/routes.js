const HomeView = () => import("../views/HomeView");
const ErrorView = () => import("../views/ErrorView");
const NotFoundView = () => import("../views/NotFoundView");

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView,
  },
  {
    path: '/error/:code',
    name: 'error',
    component: ErrorView,
  },
  {
    path: '/:pathMatch(.*)*',
    name: 'not_found',
    component: NotFoundView,
  },
];

export default routes;
