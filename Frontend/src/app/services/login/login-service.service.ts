import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { CookieService } from 'ngx-cookie-service';
import { Token } from '@angular/compiler';

@Injectable({
  providedIn: 'root',
})
export class LoginServiceService {
  constructor(private http: HttpClient, private coockies: CookieService) {}

  login(user: any): Observable<any> {
    return this.http.post('192.168.100.61:8000/api/login', user);
  }

  setToken(token: string) {
    this.coockies.set('token', token);
  }
  getToken() {
    return this.coockies.get('token');
  }
}
