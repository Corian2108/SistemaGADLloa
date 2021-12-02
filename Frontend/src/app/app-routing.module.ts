import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { RegisterComponent } from './Components/register/register.component';
import { RegisterEditComponent } from './Components/register-edit/register-edit.component';
const routes: Routes = [
  { path: 'registro', component:RegisterComponent }, 
  { path: 'registro/edit/:id', component:RegisterEditComponent }, 

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
export const routingComponents = [
  RegisterComponent,RegisterEditComponent
];