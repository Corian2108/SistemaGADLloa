import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { RegisterComponent } from './Components/register/register.component';
import { RegisterEditComponent } from './Components/register-edit/register-edit.component';
import { LoginComponent } from './Components/login/login.component';
import { CookieService } from 'ngx-cookie-service';
import { HomeComponent } from './Components/home/home.component';

@NgModule({
  declarations: [
    AppComponent,
    RegisterComponent,
    RegisterEditComponent,
    HomeComponent,
    LoginComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule,
  ],
  providers: [CookieService],
  bootstrap: [AppComponent]
})
export class AppModule {}