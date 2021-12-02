import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http'
import { Register } from '../class/register';
@Injectable({
  providedIn: 'root'
})
export class RegisterService {
  URL1 = "http://127.0.0.1:8000/api/rol";
  URL2 = "http://127.0.0.1:8000/api/estado_usuario";

  ApiService() {
    throw new Error('Method not implemented.');
  }

  constructor(private httpClient: HttpClient) { }
  getData() {
    return this.httpClient.get('http://127.0.0.1:8000/api/user/rol')
  }
  getUserById(id: string) {
    return this.httpClient.get(`http://127.0.0.1:8000/api/user/${id}`)
  } 
  insertData(data: any) {
    return this.httpClient.post('http://127.0.0.1:8000/api/user/create', data)
  }
  deleteData(id: string) {
    return this.httpClient.delete(`http://127.0.0.1:8000/api/user/${id}`)

  }
  updateProductosData(id: string, data: Register) {
    return this.httpClient.put(`http://127.0.0.1:8000/api/user/${id}`, data);
  }
  getRoles(){
    return this.httpClient.get(this.URL1)
  }
  getestados(){
    return this.httpClient.get(this.URL2)
  }
}
