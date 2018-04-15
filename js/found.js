var myApp = angular.module('myApp', []);

function Main($scope, $http) {

  $scope.customer = [{
    "id": 1,
    "name": "Denise Stone",
    "company": "Innotype",
    "title": "Sales Associate",
    "address": "6703 South Park",
    "city": "Birmingham",
    "state": "AL",
    "zip": "35231",
    "email": "dstone0@about.com",
    "phone": "1-(205)431-9177",
    "pic": "https://unsplash.imgix.net/uploads/1413386993023a925afb4/4e769802?w=1024&amp;q=50&amp;fm=jpg&amp;s=84dfb097d39ff1600cdd32be44813650",
    "bio": "Vestibulum rutrum rutrum neque. Aenean auctor gravida sem. Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio."
  }, {
    "id": 2,
    "name": "Carolyn Evans",
    "company": "Skipfire",
    "title": "Automation Specialist I",
    "address": "2 Park Meadow Junction",
    "city": "Louisville",
    "state": "KY",
    "zip": "40220",
    "email": "cevans1@goo.ne.jp",
    "phone": "1-(502)136-9662",
    "pic": "https://ununsplash.imgix.net/reserve/yzu1CGEoRQ6IE7yj8rc9_IMG_8812%20copy.jpg?w=1024&amp;q=50&amp;fm=jpg&amp;s=8dbbf6d023b5f6cdbef2f585074feaae",
    "bio": "Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat. In congue. Etiam justo. Etiam pretium iaculis justo."
  }, {
    "id": 3,
    "name": "Victor Alexander",
    "company": "Livetube",
    "title": "Quality Control Specialist",
    "address": "6 Manitowish Drive",
    "city": "Boston",
    "state": "MA",
    "zip": "02203",
    "email": "valexander2@livejournal.com",
    "phone": "1-(617)921-4365",
    "pic": "https://unsplash.imgix.net/photo-1423439793616-f2aa4356b37e?w=1024&amp;q=50&amp;fm=jpg&amp;s=3b42f9c018b2712544debf4d6a4998ff",
    "bio": "Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui. Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti. Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum."
  }, {
    "id": 4,
    "name": "Samuel James",
    "company": "Voonte",
    "title": "Information Systems Manager",
    "address": "4110 Fairview Center",
    "city": "Montgomery",
    "state": "AL",
    "zip": "36104",
    "email": "sjames3@utexas.edu",
    "phone": "1-(334)280-7582",
    "pic": "https://unsplash.imgix.net/uploads/14134890947503c6effdc/72adf455?w=1024&amp;q=50&amp;fm=jpg&amp;s=b2419796e3006cb1da9755266b0aca89",
    "bio": "Nulla nisl. Nunc nisl. Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum. In hac habitasse platea dictumst."
  }, {
    "id": 5,
    "name": "Theresa Fowler",
    "company": "Flashpoint",
    "title": "Dental Hygienist",
    "address": "2178 Ronald Regan Trail",
    "city": "Las Vegas",
    "state": "NV",
    "zip": "89150",
    "email": "tfowler4@hatena.ne.jp",
    "phone": "1-(702)664-3005",
    "pic": "https://unsplash.imgix.net/photo-1422513391413-ddd4f2ce3340?w=1024&amp;q=50&amp;fm=jpg&amp;s=282e5978de17d6cd2280888d16f06f04",
    "bio": "Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat."
  }, {
    "id": 6,
    "name": "Marilyn Roberts",
    "company": "Divanoodle",
    "title": "Marketing Assistant",
    "address": "9 Eastlawn Center",
    "city": "Atlanta",
    "state": "GA",
    "zip": "31106",
    "email": "mroberts5@nba.com",
    "phone": "1-(404)459-1409",
    "pic": "https://ununsplash.imgix.net/reserve/RONyPwknRQOO3ag4xf3R_Kinsey.jpg?w=1024&amp;q=50&amp;fm=jpg&amp;s=c8e85e7825f6c74ff13321833a9bc28d",
    "bio": "Nullam molestie nibh in lectus. Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus."
  }, {
    "id": 7,
    "name": "Nancy Hunt",
    "company": "Centizu",
    "title": "Database Administrator III",
    "address": "5 Pennsylvania Park",
    "city": "Bronx",
    "state": "NY",
    "zip": "10459",
    "email": "nhunt6@umich.edu",
    "phone": "1-(917)985-4631",
    "pic": "https://unsplash.imgix.net/photo-1417444900330-dc44c79af021?w=1024&amp;q=50&amp;fm=jpg&amp;s=691e51ea2e210a16c23294a029752141",
    "bio": "Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti. Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris."
  }, {
    "id": 8,
    "name": "Larry Mendoza",
    "company": "Skilith",
    "title": "Account Executive",
    "address": "19 Barnett Terrace",
    "city": "Seattle",
    "state": "WA",
    "zip": "98133",
    "email": "lmendoza7@nationalgeographic.com",
    "phone": "1-(206)561-9501",
    "pic": "https://ununsplash.imgix.net/reserve/TxbDzeAhRmCwa6DDrbOQ_kazan-big.jpg?w=1024&amp;q=50&amp;fm=jpg&amp;s=01c1d06b45220391463a24a148be620f",
    "bio": "Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque. Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus."
  }, {
    "id": 9,
    "name": "Kelly Garrett",
    "company": "Wordtune",
    "title": "Mechanical Systems Engineer",
    "address": "6 Iowa Circle",
    "city": "Duluth",
    "state": "GA",
    "zip": "30195",
    "email": "kgarrett8@imageshack.us",
    "phone": "1-(678)378-2798",
    "pic": "https://unsplash.imgix.net/photo-1420708392410-3c593b80d416?w=1024&amp;q=50&amp;fm=jpg&amp;s=db450320d7ee6de66c24c9b0bf2de3c6",
    "bio": "Nulla facilisi. Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque. Quisque porta volutpat erat."
  }, {
    "id": 10,
    "name": "Harry Rogers",
    "company": "Browsecat",
    "title": "Statistician IV",
    "address": "75 Ridge Oak Trail",
    "city": "Boulder",
    "state": "CO",
    "zip": "80305",
    "email": "hrogers9@chicagotribune.com",
    "phone": "1-(720)904-4894",
    "pic": "https://ununsplash.imgix.net/reserve/r0r252VR6WqPRsxngGUE_telefoon%20politie.jpg?w=1024&amp;q=50&amp;fm=jpg&amp;s=30a261ce928af70d4f9a3fe0cf394bc3",
    "bio": "Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim."
  }];

  $scope.length = $scope.customer.length;

  $scope.setSelectedItem = function(i) {
    $scope.selectedItem = i;
  };

  $scope.new = {
    name: '',
    company: '',
    title: '',
    address: '',
    city: '',
    state: '',
    zip: '',
    email: '',
    phone: '',
    bio: ''
  };

  $scope.addItem = function() {
    $scope.length = $scope.customer.length;
    if ($scope.new.name) {
      $scope.customer.push({
        "id": ($scope.length += 1),
        "name": $scope.new.name,
        "company": $scope.new.company,
        "title": $scope.new.title,
        "address": $scope.new.address,
        "city": $scope.new.city,
        "state": $scope.new.state,
        "zip": $scope.new.zip,
        "email": $scope.new.email,
        "phone": $scope.new.phone,
        "bio": $scope.new.bio
      })
      $scope.new.name = '';
      $scope.new.company = '';
      $scope.new.title = '';
      $scope.new.address = '';
      $scope.new.city = '';
      $scope.new.state = '';
      $scope.new.zip = '';
      $scope.new.email = '';
      $scope.new.phone = '';
      $scope.new.bio = '';
    }
  };
  
  $scope.edit = {
    name: '',
    company: '',
    title: '',
    address: '',
    city: '',
    state: '',
    zip: '',
    email: '',
    phone: '',
    bio: ''
  };
  
  $scope.editItem = function(index) {
    if($scope.edit.name) {
      $scope.customer[index].name = $scope.edit.name;
      $scope.edit.name = '';
    }
    if($scope.edit.company) {
      $scope.customer[index].company = $scope.edit.company;
      $scope.edit.company = '';
    }
    if($scope.edit.title) {
      $scope.customer[index].title = $scope.edit.title;
      $scope.edit.title = '';
    }
    if($scope.edit.address) {
      $scope.customer[index].address = $scope.edit.address;
      $scope.edit.address = '';
    }
    if($scope.edit.city) {
      $scope.customer[index].city = $scope.edit.city;
      $scope.edit.city = '';
    }
    if($scope.edit.state) {
      $scope.customer[index].state = $scope.edit.state;
      $scope.edit.state = '';
    }
    if($scope.edit.zip) {
      $scope.customer[index].zip = $scope.edit.zip;
      $scope.edit.zip = '';
    }
    if($scope.edit.email) {
      $scope.customer[index].email = $scope.edit.email;
      $scope.edit.email = '';
    }
    if($scope.edit.phone) {
      $scope.customer[index].phone = $scope.edit.phone;
      $scope.edit.phone = '';
    }
    if($scope.edit.bio) {
      $scope.customer[index].bio = $scope.edit.bio;
      $scope.edit.bio = '';
    }
  }
  
  $scope.deleteItem = function(idx) {
    if ($scope.selectedItem >= 0) {
      $scope.customer.splice(idx, 1);
      for (i = idx; i < $scope.length; i++) {
        $scope.customer[i].id -= 1;
      }
    }
  }

  $scope.clearFilter = function() {
    console.log("xxx");
    $scope.search = {};
  };

}