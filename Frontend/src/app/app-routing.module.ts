import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { RegisterComponent } from './Components/register/register.component';
import { RegisterEditComponent } from './Components/register-edit/register-edit.component';
import { LoginComponent } from './Components/login/login.component';
import { HomeComponent } from './Components/home/home.component';
const routes: Routes = [
  { path: 'registro', component:RegisterComponent }, 
  { path: 'registro/edit/:id', component:RegisterEditComponent }, 
  { path: 'home', component: HomeComponent },
  { path: 'login', component: LoginComponent, pathMatch: 'full' },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
export const routingComponents = [
  RegisterComponent,RegisterEditComponent
];