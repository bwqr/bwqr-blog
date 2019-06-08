import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { AdminModule } from './admin/admin.module';
import { ArticleModule } from './article/article.module';
import { AuthModule } from './auth/auth.module';
import { CoreModule } from './core/core.module';
import { ImageModule } from './image/image.module';
import { NavigationModule } from './navigation/navigation.module';
import { UserModule } from './user/user.module';

@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserAnimationsModule,
    AppRoutingModule,
    AdminModule,
    ArticleModule,
    AuthModule,
    CoreModule,
    ImageModule,
    NavigationModule,
    UserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
