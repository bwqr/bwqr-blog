export const routes: any = {
    admin: {
        url: 'admin/',
        languages: { url: 'languages/' },
        categories: { url: 'categories/' },
        menus: { url: 'menus/' },
        users: { url: 'users/' },
        user: { url: 'user/' },
        roles: { url: 'roles/' },
        role: { url: 'role/' },
        permissions: { url: 'permissions/' },
        permission: { url: 'permission/' }
    },
    auth: {
        url: 'auth/',
        register: { url: 'register/' },
        'reset-password': { url: 'reset-password/' },
        'is-authenticated': { url: 'is-authenticated/' },
        login: { url: 'login/' },
        logout: { url: 'logout/' }
    },
    user: {
        url: 'user/',
        info: { url: 'info/' },
        menus: { url: 'menus/' },
        dashboard: { url: 'dashboard/' },
        management: { url: 'management/' },
        'profile-image': { url: 'profile-image/' },
        profile: { url: 'profile/' }
    },
    article: {
        url: 'article/',
        article: { url: 'article/' },
        content: { url: 'content/' },
        restore: { url: 'restore/' },
        'force-delete': { url: 'force-delete/' },
        permission: { url: 'permission/' },
        articles: { url: 'articles/' },
        trash: { url: 'trashed-articles/' },
    },
    image: {
        url: 'image/',
        image: { url: 'image/' },
        thumb: { url: 'thumb/' },
        images: { url: 'images/' },
        edit: { url: 'edit/' }
      }
};
