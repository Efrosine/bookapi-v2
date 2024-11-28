# Project: BookApi

## End-point: loginAdmin
### Method: POST
>```
>{{baseUrl}}/api/login
>```
### Body (**raw**)

```json
{
    "email":"admin@example.com",
    "password":"admin123"
}
```

### Response: 201
```json
{
    "message": "Login berhasil.",
    "data": {
        "token": "1|Mx4reAzCZVYHwgUk8GIloQaOmDF2S22QUcEm8wg5ae66c7f5"
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: loginUser
### Method: POST
>```
>{{baseUrl}}/api/login
>```
### Body (**raw**)

```json
{
    "email":"user@example.com",
    "password":"user123"
}
```

### Response: 201
```json
{
    "message": "Login berhasil.",
    "data": {
        "token": "2|Q7TcoJUftf8HKx1NQt7qcoTmaJBgswAnFwiFOvx69b40bca5"
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: GetUser
### Method: GET
>```
>{{baseUrl}}/api/users/1
>```
### Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


### Response: 200
```json
{
    "message": "User ditemukan",
    "data": {
        "id": 1,
        "name": "Admin User",
        "email": "admin@example.com",
        "email_verified_at": null,
        "address": null,
        "role": "admin",
        "created_at": "2024-11-28T12:04:13.000000Z",
        "updated_at": "2024-11-28T12:04:13.000000Z"
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: GetBook
### Method: GET
>```
>{{baseUrl}}/api/books
>```
### Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


### Response: 200
```json
{
    "count": 10,
    "message": "Buku ditemukan",
    "data": [
        {
            "id": 1,
            "title": "Voluptate et qui et.",
            "author": "Terence Hessel",
            "publisher": "Haley, Gutmann and Daugherty",
            "overview": "Deleniti voluptas at sit molestiae molestiae rem. Exercitationem eaque officia deserunt iste amet aspernatur sunt.",
            "read_time": "1 day",
            "release_date": "2004-11-15",
            "image_url": "http://lrv.efrosine.my.id/storage/https://via.placeholder.com/640x480.png/00dd77?text=books+dignissimos",
            "created_at": "2024-11-28T12:04:13.000000Z",
            "updated_at": "2024-11-28T12:04:13.000000Z"
        },
        {
            "id": 2,
            "title": "Qui assumenda dolorem.",
            "author": "Dr. Meghan McDermott",
            "publisher": "Sanford, Bergstrom and Keebler",
            "overview": "Omnis accusantium recusandae voluptas ut alias eos. Eveniet quos sapiente incidunt nobis impedit.",
            "read_time": "2 hours",
            "release_date": "1970-01-19",
            "image_url": "http://lrv.efrosine.my.id/storage/https://via.placeholder.com/640x480.png/00bb66?text=books+iure",
            "created_at": "2024-11-28T12:04:13.000000Z",
            "updated_at": "2024-11-28T12:04:13.000000Z"
        },
        {
            "id": 3,
            "title": "Perspiciatis explicabo veniam veritatis.",
            "author": "Noel Stiedemann",
            "publisher": "O'Reilly-Littel",
            "overview": "Reiciendis voluptatem libero culpa voluptatibus illum nesciunt. Nemo enim modi iste iste. Sed est sit facilis non consequatur.",
            "read_time": "1 day",
            "release_date": "1992-05-20",
            "image_url": "http://lrv.efrosine.my.id/storage/https://via.placeholder.com/640x480.png/00eeff?text=books+quia",
            "created_at": "2024-11-28T12:04:13.000000Z",
            "updated_at": "2024-11-28T12:04:13.000000Z"
        },
        {
            "id": 4,
            "title": "Ea iure omnis.",
            "author": "Wyatt Abbott",
            "publisher": "Beahan, Hoeger and Hauck",
            "overview": "Odio in nihil maiores in sunt sunt fuga. Possimus ut laborum perferendis odit modi. Rerum et earum aut sint nulla excepturi id.",
            "read_time": "2 hours",
            "release_date": "1974-04-13",
            "image_url": "http://lrv.efrosine.my.id/storage/https://via.placeholder.com/640x480.png/004466?text=books+corporis",
            "created_at": "2024-11-28T12:04:13.000000Z",
            "updated_at": "2024-11-28T12:04:13.000000Z"
        },
        {
            "id": 5,
            "title": "Alias beatae molestiae.",
            "author": "Dr. Maria Botsford Jr.",
            "publisher": "King, Funk and Kuhic",
            "overview": "Libero quo in sed accusantium necessitatibus et. Suscipit qui deserunt et distinctio. Voluptas omnis eos amet reprehenderit est dolorum quas.",
            "read_time": "1 day",
            "release_date": "1996-06-11",
            "image_url": "http://lrv.efrosine.my.id/storage/https://via.placeholder.com/640x480.png/00aa00?text=books+vero",
            "created_at": "2024-11-28T12:04:13.000000Z",
            "updated_at": "2024-11-28T12:04:13.000000Z"
        },
        {
            "id": 6,
            "title": "Nisi magni repudiandae consectetur.",
            "author": "Laney Armstrong Jr.",
            "publisher": "Hauck Group",
            "overview": "Voluptas iure veniam sint aspernatur reprehenderit. Natus iusto est laudantium aperiam qui perferendis laboriosam. Unde sint cum illum magnam. Expedita libero eveniet harum et qui mollitia pariatur.",
            "read_time": "4 hours",
            "release_date": "1988-03-05",
            "image_url": "http://lrv.efrosine.my.id/storage/https://via.placeholder.com/640x480.png/00eebb?text=books+perspiciatis",
            "created_at": "2024-11-28T12:04:13.000000Z",
            "updated_at": "2024-11-28T12:04:13.000000Z"
        },
        {
            "id": 7,
            "title": "Est qui deleniti.",
            "author": "Madisyn Wehner",
            "publisher": "Vandervort-Swaniawski",
            "overview": "Deleniti facilis voluptatem ut. Commodi cupiditate at sapiente. Aut nisi error non consectetur. Est accusamus et dolores error maxime. Delectus laudantium ut est assumenda.",
            "read_time": "2 hours",
            "release_date": "2004-12-29",
            "image_url": "http://lrv.efrosine.my.id/storage/https://via.placeholder.com/640x480.png/00ccff?text=books+eveniet",
            "created_at": "2024-11-28T12:04:13.000000Z",
            "updated_at": "2024-11-28T12:04:13.000000Z"
        },
        {
            "id": 8,
            "title": "Commodi vel veritatis dignissimos.",
            "author": "Modesto Mayert",
            "publisher": "Connelly-Hyatt",
            "overview": "Suscipit nesciunt sit adipisci perspiciatis debitis omnis quod. Inventore nostrum voluptatem velit perferendis qui. Aperiam veniam labore et autem iure. Aliquam necessitatibus voluptatibus illo adipisci et reprehenderit amet impedit.",
            "read_time": "1 day",
            "release_date": "1985-04-15",
            "image_url": "http://lrv.efrosine.my.id/storage/https://via.placeholder.com/640x480.png/0033dd?text=books+perferendis",
            "created_at": "2024-11-28T12:04:13.000000Z",
            "updated_at": "2024-11-28T12:04:13.000000Z"
        },
        {
            "id": 9,
            "title": "Et qui minus.",
            "author": "Ryan Lynch",
            "publisher": "Heaney-Kuhic",
            "overview": "Quia enim et quia natus voluptatum rerum debitis. Et autem ullam saepe et doloribus mollitia. Suscipit magnam placeat qui inventore consequatur. Velit dolor nihil eos quam similique sint necessitatibus.",
            "read_time": "1 day",
            "release_date": "1993-04-22",
            "image_url": "http://lrv.efrosine.my.id/storage/https://via.placeholder.com/640x480.png/006666?text=books+non",
            "created_at": "2024-11-28T12:04:13.000000Z",
            "updated_at": "2024-11-28T12:04:13.000000Z"
        },
        {
            "id": 10,
            "title": "Et adipisci nemo nulla.",
            "author": "Meagan Donnelly",
            "publisher": "McDermott-Brekke",
            "overview": "Ipsum nisi nobis consequuntur odio quia ut. Nemo fuga quidem qui in. Ab facilis accusantium accusamus et autem. Et et necessitatibus maiores.",
            "read_time": "1 day",
            "release_date": "1971-07-01",
            "image_url": "http://lrv.efrosine.my.id/storage/https://via.placeholder.com/640x480.png/00dd33?text=books+omnis",
            "created_at": "2024-11-28T12:04:13.000000Z",
            "updated_at": "2024-11-28T12:04:13.000000Z"
        }
    ]
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: GetBookbyId
### Method: GET
>```
>{{baseUrl}}/api/books/1
>```
### Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


### Response: 200
```json
{
    "message": "Buku ditemukan",
    "data": {
        "id": 1,
        "title": "Voluptate et qui et.",
        "author": "Terence Hessel",
        "publisher": "Haley, Gutmann and Daugherty",
        "overview": "Deleniti voluptas at sit molestiae molestiae rem. Exercitationem eaque officia deserunt iste amet aspernatur sunt.",
        "read_time": "1 day",
        "release_date": "2004-11-15",
        "image_url": "http://lrv.efrosine.my.id/storage/http://lrv.efrosine.my.id/storage/https://via.placeholder.com/640x480.png/00dd77?text=books+dignissimos",
        "created_at": "2024-11-28T12:04:13.000000Z",
        "updated_at": "2024-11-28T12:04:13.000000Z"
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: PostBook
### Method: POST
>```
>{{baseUrl}}/api/books
>```
### Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


### Body formdata

|Param|value|Type|
|---|---|---|
|title|title1|text|
|author|wahid|text|
|publisher|pub|text|
|overview|bagus bagnet|text|
|read_time|2jam|text|
|release_date|2024-12-12|text|
|image|postman-cloud:///1efac23a-45bf-4ee0-9a64-142d537baa69|file|


### Response: 201
```json
{
    "message": "Buku Berhasil di tambahkan",
    "data": {
        "title": "title1",
        "author": "wahid",
        "publisher": "pub",
        "overview": "bagus bagnet",
        "read_time": "2jam",
        "release_date": "2024-12-12",
        "image_url": "http://lrv.efrosine.my.id/storage/bookImg/C5KivMRkSOkXYU9PuDmXM6J7gUc29NcoWKolqqdf.jpg",
        "updated_at": "2024-11-28T12:41:29.000000Z",
        "created_at": "2024-11-28T12:41:29.000000Z",
        "id": 12
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: PutBook
### Method: PUT
>```
>{{baseUrl}}/api/books/10
>```
### Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


### Body (**raw**)

```json
{
    "title":"ini judul baru"
}
```

### Response: 200
```json
{
    "message": "Buku Berhasil di update",
    "data": {
        "id": 10,
        "title": "ini judul baru",
        "author": "Meagan Donnelly",
        "publisher": "McDermott-Brekke",
        "overview": "Ipsum nisi nobis consequuntur odio quia ut. Nemo fuga quidem qui in. Ab facilis accusantium accusamus et autem. Et et necessitatibus maiores.",
        "read_time": "1 day",
        "release_date": "1971-07-01",
        "image_url": "http://lrv.efrosine.my.id/storage/https://via.placeholder.com/640x480.png/00dd33?text=books+omnis",
        "created_at": "2024-11-28T12:04:13.000000Z",
        "updated_at": "2024-11-28T12:43:06.000000Z"
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: DeleteBook
### Method: DELETE
>```
>{{baseUrl}}/api/books/11
>```
### Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


### Response: 200
```json
{
    "message": "Buku Berhasil di hapus",
    "data": {
        "id": 11,
        "title": "title1",
        "author": "wahid",
        "publisher": "pub",
        "overview": "bagus bagnet",
        "read_time": "2jam",
        "release_date": "2024-12-12",
        "image_url": "http://lrv.efrosine.my.id/storage/bookImg/pVgxWOuUElpMQm4hjp8azjKRQ5rTqiRXQxDjRc1g.jpg",
        "created_at": "2024-11-28T12:41:21.000000Z",
        "updated_at": "2024-11-28T12:41:21.000000Z"
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: GetReview
### Method: GET
>```
>{{baseUrl}}/api/reviews
>```
### Response: 200
```json
{
    "count": 10,
    "message": "Review ditemukan",
    "data": [
        {
            "id": 1,
            "user_id": 4,
            "book_id": 7,
            "rating": 5,
            "review_text": "Laudantium est officia illum rem sapiente expedita. Quasi qui ea numquam.",
            "created_at": "2024-11-28T12:04:14.000000Z",
            "updated_at": "2024-11-28T12:04:14.000000Z"
        },
        {
            "id": 2,
            "user_id": 10,
            "book_id": 6,
            "rating": 4,
            "review_text": "Eos iusto quam eos rem quidem perferendis. Sed et aspernatur vero. Blanditiis itaque nihil dolores et nesciunt ullam.",
            "created_at": "2024-11-28T12:04:14.000000Z",
            "updated_at": "2024-11-28T12:04:14.000000Z"
        },
        {
            "id": 3,
            "user_id": 4,
            "book_id": 9,
            "rating": 5,
            "review_text": "Itaque provident repellendus voluptatibus saepe. Pariatur aut delectus praesentium voluptates. Unde impedit aut voluptatem non quam quidem.",
            "created_at": "2024-11-28T12:04:14.000000Z",
            "updated_at": "2024-11-28T12:04:14.000000Z"
        },
        {
            "id": 4,
            "user_id": 6,
            "book_id": 7,
            "rating": 2,
            "review_text": "Deserunt sed nisi ut laudantium nihil et. Quasi quisquam nisi quis consectetur quaerat commodi molestiae. Accusamus earum animi hic non laborum magni. Quia voluptas quam et.",
            "created_at": "2024-11-28T12:04:14.000000Z",
            "updated_at": "2024-11-28T12:04:14.000000Z"
        },
        {
            "id": 5,
            "user_id": 10,
            "book_id": 9,
            "rating": 5,
            "review_text": "Aperiam incidunt voluptas optio dolores cupiditate eos et. Inventore debitis saepe quod voluptatem cum id. Consequuntur ab inventore autem rerum non facilis quia. Vitae non quae placeat qui qui.",
            "created_at": "2024-11-28T12:04:14.000000Z",
            "updated_at": "2024-11-28T12:04:14.000000Z"
        },
        {
            "id": 6,
            "user_id": 9,
            "book_id": 5,
            "rating": 4,
            "review_text": "Eligendi sit labore commodi necessitatibus ut iure. Officia soluta reiciendis porro dolor suscipit quis. Velit aperiam sed est rerum facere voluptates beatae.",
            "created_at": "2024-11-28T12:04:14.000000Z",
            "updated_at": "2024-11-28T12:04:14.000000Z"
        },
        {
            "id": 7,
            "user_id": 4,
            "book_id": 10,
            "rating": 2,
            "review_text": "Quod consequuntur sint iure aliquid. Iure animi et et suscipit. Est voluptate sequi magni veniam aut commodi. Illum corporis quia labore iusto ad est corporis.",
            "created_at": "2024-11-28T12:04:14.000000Z",
            "updated_at": "2024-11-28T12:04:14.000000Z"
        },
        {
            "id": 8,
            "user_id": 4,
            "book_id": 7,
            "rating": 1,
            "review_text": "Sit nostrum adipisci officia autem nemo quo omnis. Illo quasi tempora dolore deserunt corrupti eum. In est aliquid distinctio sunt dolores eum. Voluptas animi est asperiores rerum.",
            "created_at": "2024-11-28T12:04:14.000000Z",
            "updated_at": "2024-11-28T12:04:14.000000Z"
        },
        {
            "id": 9,
            "user_id": 6,
            "book_id": 1,
            "rating": 4,
            "review_text": "In sequi dolor omnis beatae consequatur. Odit inventore ut est et ullam voluptatem. At sit harum dolore commodi aliquam consequatur occaecati.",
            "created_at": "2024-11-28T12:04:14.000000Z",
            "updated_at": "2024-11-28T12:04:14.000000Z"
        },
        {
            "id": 10,
            "user_id": 3,
            "book_id": 8,
            "rating": 3,
            "review_text": "Aut cumque aut ipsum assumenda consequatur sit minima nesciunt. Et dolorem qui quis sit et ut. Ut libero illo maxime eaque vel quas. Dolores ut accusamus beatae similique quis. Rerum itaque et impedit dolorem.",
            "created_at": "2024-11-28T12:04:14.000000Z",
            "updated_at": "2024-11-28T12:04:14.000000Z"
        }
    ]
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: GetReviewbyId
### Method: GET
>```
>{{baseUrl}}/api/reviews/1
>```
### Response: 200
```json
{
    "message": "Review ditemukan",
    "data": {
        "id": 1,
        "user_id": 4,
        "book_id": 7,
        "rating": 5,
        "review_text": "Laudantium est officia illum rem sapiente expedita. Quasi qui ea numquam.",
        "created_at": "2024-11-28T12:04:14.000000Z",
        "updated_at": "2024-11-28T12:04:14.000000Z"
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: PostReview
### Method: POST
>```
>{{baseUrl}}/api/reviews
>```
### Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


### Body (**raw**)

```json
{
    "user_id": 1,
    "book_id": 3,
    "rating":2,
    "review_text":"ini bagus"
}
```

### Response: 201
```json
{
    "message": "Review berhasil ditambahkan",
    "data": {
        "user_id": 1,
        "book_id": 3,
        "rating": 2,
        "review_text": "ini bagus",
        "updated_at": "2024-11-28T12:51:32.000000Z",
        "created_at": "2024-11-28T12:51:32.000000Z",
        "id": 11
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: PutReview
### Method: PUT
>```
>{{baseUrl}}/api/reviews/1
>```
### Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


### Body (**raw**)

```json
{
    "rating":1,
    "review_text":"ini adalah update dari method put"
}
```

### Response: 200
```json
{
    "message": "Review berhasil di update",
    "data": {
        "id": 1,
        "user_id": 4,
        "book_id": 7,
        "rating": 1,
        "review_text": "ini adalah update dari method put",
        "created_at": "2024-11-28T12:04:14.000000Z",
        "updated_at": "2024-11-28T12:52:53.000000Z"
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: DeleteReview
### Method: DELETE
>```
>{{baseUrl}}/api/reviews/10
>```
### Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


### Response: 200
```json
{
    "message": "Review berhasil di hapus",
    "data": {
        "id": 10,
        "user_id": 3,
        "book_id": 8,
        "rating": 3,
        "review_text": "Aut cumque aut ipsum assumenda consequatur sit minima nesciunt. Et dolorem qui quis sit et ut. Ut libero illo maxime eaque vel quas. Dolores ut accusamus beatae similique quis. Rerum itaque et impedit dolorem.",
        "created_at": "2024-11-28T12:04:14.000000Z",
        "updated_at": "2024-11-28T12:04:14.000000Z"
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: GetLendings
### Method: GET
>```
>{{baseUrl}}/api/lendings
>```
### Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


### Response: 200
```json
{
    "count": 25,
    "message": "Peminjaman ditemukan",
    "data": [
        {
            "id": 1,
            "user_id": 6,
            "book_id": 6,
            "lent_at": "2017-01-19 17:09:06",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:14.000000Z",
            "updated_at": "2024-11-28T12:04:14.000000Z"
        },
        {
            "id": 2,
            "user_id": 2,
            "book_id": 3,
            "lent_at": "2004-07-23 02:22:18",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:14.000000Z",
            "updated_at": "2024-11-28T12:04:14.000000Z"
        },
        {
            "id": 3,
            "user_id": 4,
            "book_id": 4,
            "lent_at": "1979-05-12 21:31:35",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:14.000000Z",
            "updated_at": "2024-11-28T12:04:14.000000Z"
        },
        {
            "id": 4,
            "user_id": 5,
            "book_id": 5,
            "lent_at": "2024-03-26 09:22:16",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 5,
            "user_id": 10,
            "book_id": 5,
            "lent_at": "2014-07-21 01:47:33",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 6,
            "user_id": 5,
            "book_id": 6,
            "lent_at": "1996-01-10 07:03:16",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 7,
            "user_id": 6,
            "book_id": 9,
            "lent_at": "1997-06-19 00:28:24",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 8,
            "user_id": 1,
            "book_id": 5,
            "lent_at": "2004-04-14 02:58:04",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 9,
            "user_id": 5,
            "book_id": 9,
            "lent_at": "2024-07-22 14:54:53",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 10,
            "user_id": 4,
            "book_id": 5,
            "lent_at": "1979-11-16 10:52:53",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 11,
            "user_id": 10,
            "book_id": 6,
            "lent_at": "1976-10-08 00:07:36",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 12,
            "user_id": 10,
            "book_id": 2,
            "lent_at": "2010-08-19 14:42:43",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 13,
            "user_id": 6,
            "book_id": 7,
            "lent_at": "1989-07-18 11:46:37",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 14,
            "user_id": 7,
            "book_id": 9,
            "lent_at": "2024-05-01 08:21:30",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 15,
            "user_id": 9,
            "book_id": 8,
            "lent_at": "2001-12-31 17:28:36",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 16,
            "user_id": 3,
            "book_id": 1,
            "lent_at": "2012-06-25 17:54:21",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 17,
            "user_id": 2,
            "book_id": 1,
            "lent_at": "1975-11-08 14:06:32",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 18,
            "user_id": 4,
            "book_id": 2,
            "lent_at": "2014-08-12 16:35:53",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 19,
            "user_id": 7,
            "book_id": 1,
            "lent_at": "2015-11-19 22:50:31",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 20,
            "user_id": 10,
            "book_id": 1,
            "lent_at": "2012-09-16 20:50:06",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 21,
            "user_id": 1,
            "book_id": 9,
            "lent_at": "1984-08-18 00:44:10",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 22,
            "user_id": 2,
            "book_id": 9,
            "lent_at": "2014-04-16 14:03:30",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 23,
            "user_id": 4,
            "book_id": 9,
            "lent_at": "1996-11-17 08:23:21",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 24,
            "user_id": 6,
            "book_id": 4,
            "lent_at": "1976-06-10 18:41:30",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        },
        {
            "id": 25,
            "user_id": 7,
            "book_id": 1,
            "lent_at": "2005-04-29 12:47:25",
            "returned_at": null,
            "notes": null,
            "created_at": "2024-11-28T12:04:15.000000Z",
            "updated_at": "2024-11-28T12:04:15.000000Z"
        }
    ]
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: GetLendingsbyId
### Method: GET
>```
>{{baseUrl}}/api/lendings/1
>```
### Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


### Response: 200
```json
{
    "message": "Peminjaman ditemukan",
    "data": {
        "id": 1,
        "user_id": 6,
        "book_id": 6,
        "lent_at": "2017-01-19 17:09:06",
        "returned_at": null,
        "notes": null,
        "created_at": "2024-11-28T12:04:14.000000Z",
        "updated_at": "2024-11-28T12:04:14.000000Z"
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: PostLendings
### Method: POST
>```
>{{baseUrl}}/api/lendings
>```
### Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


### Body (**raw**)

```json
{
    "user_id":1,
    "book_id":1,
    "lent_at":"2024-11-02"
}
```

### Response: 201
```json
{
    "message": "Peminjaman berhasil ditambahkan",
    "data": {
        "user_id": 1,
        "book_id": 1,
        "lent_at": "2024-11-02",
        "updated_at": "2024-11-28T12:57:05.000000Z",
        "created_at": "2024-11-28T12:57:05.000000Z",
        "id": 26
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: PutLendings
### Method: PUT
>```
>{{baseUrl}}/api/lendings/10
>```
### Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


### Body (**raw**)

```json
{
    "returned_at":"2024-08-02 18:29:18",
    "notes":"2024-08-02"
}
```

### Response: 200
```json
{
    "message": "Peminjaman berhasil diupdate",
    "data": {
        "id": 10,
        "user_id": 4,
        "book_id": 5,
        "lent_at": "1979-11-16 10:52:53",
        "returned_at": "2024-08-02 18:29:18",
        "notes": "2024-08-02",
        "created_at": "2024-11-28T12:04:15.000000Z",
        "updated_at": "2024-11-28T12:58:34.000000Z"
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: DeleteLendings
### Method: DELETE
>```
>{{baseUrl}}/api/lendings/10
>```
### Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


### Response: 200
```json
{
    "message": "Buku Berhasil di hapus",
    "data": {
        "id": 10,
        "user_id": 4,
        "book_id": 5,
        "lent_at": "1979-11-16 10:52:53",
        "returned_at": "2024-08-02 18:29:18",
        "notes": "2024-08-02",
        "created_at": "2024-11-28T12:04:15.000000Z",
        "updated_at": "2024-11-28T12:58:34.000000Z"
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃
_________________________________________________
Powered By: [postman-to-markdown](https://github.com/bautistaj/postman-to-markdown/)
