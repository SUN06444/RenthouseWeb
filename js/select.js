  angular.module('changeExample', [])
    .controller('ExampleController', ['$scope', function($scope) {
      $scope.changeModel = "Option 4";
      $scope.dropdown3 = "Option 1";
      $scope.dropdown4 = "Option 2";

      $scope.clickChange = function(e) {
        if (e.keyCode === 40) {
          e.preventDefault();
          $scope.expandWithKeyboard();
        }

      }

      $scope.keyChange = function() {
        console.log("bye");
      }

      $scope.submitButton = function() {
        $scope.submittedValue = $scope.dropdown3;
      }

      var decoupled = document.getElementById('dd4');

      decoupled.addEventListener('keydown', function(e) {
        submitDd4(e);
      });
      decoupled.addEventListener('click', function(e) {
        setTimeout(function() {
          submitDd4(e);
        }, 1)

      })

      var clicky = false;

      var submitDd4 = function(event) {
        if (event.type === "keydown" && event.keyCode === 9) {
          $scope.dropdown4Result = $scope.dropdown4;
        } else if (event.type === "click") {
          $scope.dropdown4Result = $scope.dropdown4;

        }
      }

      $scope.$watch('dropdown4', function(newVal, oldVal) {
        if (newVal !== oldVal && clicky) {
          $scope.dropdown4Result = newVal;
          clicky = false;
        }
      })

      /* When the user clicks on the button,
      toggle between hiding and showing the dropdown content */
      var myDropdown = document.getElementById("myDropdown");
      $scope.expandCustom = function() {
        myDropdown.classList.toggle("show");
      }

      $scope.expandWithKeyboard = function() {
        myDropdown.classList.toggle("show");
        myDropdown.children[0].focus();
        myDropdown.addEventListener('keydown', keyboardNav);
      }

      function findElem(coll) {
        for (var i = 0; i < coll.length; i++) {
          if (coll[i] === document.activeElement) {
            return i
          }
        }
      }
      $scope.loadAccount = function(account) {
        $scope.loadedAccount = account;
      }

      function keyboardNav(e) {
        if (e.keyCode === 40) {
          e.preventDefault()
          var next = (findElem(myDropdown.children) + 1)
          if (next > myDropdown.children.length - 1) {
            myDropdown.children[0].focus();
          } else {
            myDropdown.children[next].focus();
          }

        } else if (e.keyCode === 38) {
          e.preventDefault();
          var prev = (findElem(myDropdown.children) - 1)
          if (prev === -1) {
            myDropdown.children[myDropdown.children.length - 1].focus();
          } else {
            myDropdown.children[prev].focus();
          }
        }
      }

      $scope.tabLoad = function(e) {
        if (e.keyCode === 9) {
          e.preventDefault();
          $scope.loadAccount(e.target.id);
          myDropdown.classList.toggle("show");
          document.getElementById("dropdownButton").focus();
        } else if (e.keyCode === 27) {
          myDropdown.classList.toggle("show");
          document.getElementById("dropdownButton").focus();
        }
      }

      var ddButton = document.getElementById('dropdownButton');

      // Close the dropdown menu if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

          var dropdowns = document.getElementsByClassName("dropdown-content");
          [].forEach.call(dropdowns, function(openDropdown) {
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          })
        }
      }

      var mouseEvent = document.getElementById('mouseEvent');

      mouseEvent.addEventListener('keydown', function(e) {
        if (e.keyCode === 40) {
          console.log("hello");
          e.stopPropagation();
          e.preventDefault();
          setTimeout(function() {
            // document.getElementById("mouseEvent").click();
            angular.element(document.querySelector('#mouseEvent')).triggerHandler('click');

            // angular.element(mouseEvent).triggerHandler('click');
          }, 0);
        }
      })

    }]);