// 1. Define route components.
// These can be imported from other files

import { createRouter, createWebHistory } from "vue-router";

// 2. Define some routes
// Each route should map to a component.
// We'll talk about nested routes later.
const routes = [
  { path: '/', component: () => import('../Views/HomeView.vue') },
  { path: '/professor/:id',name:'professor', component: () => import('../Views/PerfilPublico.vue') },
  { path: '/aluno/:id',name:'aluno', component: () => import('../Views/PerfilAluno.vue') },
  { path: '/registroProfessor',name:'registroProfessor', component: () => import('../Views/RegisterProfessor.vue') },
  { path: '/cadastroCompleto',name:'cadastroCompleto', component: () => import('../Views/CadastroCompleto.vue') },
  { path: '/perfil/:id', name:'perfil', component:() => import('../Views/Perfil.vue')}
]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = createRouter({
  // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
  history: createWebHistory(),
  routes, // short for `routes: routes`
})
export default router;
