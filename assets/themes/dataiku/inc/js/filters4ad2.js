
(function ($, window, document) {
    'use strict';

    var page = {
        init: function () {
            page.load_webinar_info();
        },

        load_webinar_info: function() {
            if ($('.scrollable-posts .load-webinar').length) {
                $('.scrollable-posts').on('click', '.load-webinar', function(e){
                    e.preventDefault();
                    var page_id = $(this).attr('data-id');

                    $.ajax({
                        url: ajaxvars.ajaxurl,
                        data: {
                            action  : 'load_webinar_info',
                            page_id : page_id
                        },
                        type: 'POST',
                        success: function success(response) {
                            if (response) {
                                $('.popup-webinar .content').html(response.content);
                            }
                        }
                    });
                });
            }
        },

        resize: function () {
        },
        scroll: function () {
        }
    };

    $(document).ready(page.init);

    $(document).ready(function() {

        $("#filtersapp").css('opacity','1');

        // Careers Filtering

        var jobCount = null;
        const href = window.location.href;
        const queryParams = new URLSearchParams(window.location.search);
        const jobUrlId = queryParams.get('id');
        const SELECTED_DEPARTMENT_BY_DEFAULT = "Engineering";

        const app2 = new Vue({
            el: '#filtersapp',
            data: {
                positions: null,
                arrayTwo: null,
                regions: [],
                departments: [],
                teams: [],
                selectedDepartments: [],
                selectedLocations: [],
                remoteChecked: false
            },
            created () {
                let one =
                    "https://boards-api.greenhouse.io/v1/boards/dataiku/jobs?content=true";
                let two =
                    "https://boards-api.greenhouse.io/v1/boards/dataiku/offices?render_as=tree";

                const requestOne = axios.get(one);
                const requestTwo = axios.get(two);

                axios
                    .all([requestOne, requestTwo])
                    .then(
                        axios.spread((...responses) => {
                            jobCount = responses[0].data.meta.total + ' ';
                            var labelVal = $(".open-positions .circle-purple h3").text();
                            $(".open-positions .circle-purple h3").text(jobCount + labelVal);
                            $(".page-title h1 span").text(jobCount);

                            this.positions = responses[0].data.jobs;

                            const regionsData = responses[1].data.offices;

                            const departmentsSet = new Set ();
                            const teamsSet = new Set();

                            this.positions.forEach((elem) => {
                                // if (elem.departments?.length > 0) {
                                //     departmentsSet.add(elem.departments[0].name);
                                    departmentsSet.add(elem.metadata[0].value);
                                    // teamsSet.add(elem.metadata[1].value + "||" + elem.departments[0].name);
                                    teamsSet.add(elem.metadata[1].value + "||" + elem.metadata[0].value);
                                // }
                            });

                            regionsData.forEach((elem) => {
                                this.regions.push(elem);
                            });


                            this.departments = Array.from(departmentsSet).sort();
                            this.teams = Array.from(teamsSet).map((elem) => { let arr = elem.split('||')
                                return { name:arr[0], department:arr[1] }
                            }).sort((prev, next) => prev.name > next.name ? 1 : -1 )

                        })
                    ).then( () =>  {

                        // Only For Engeeniring Page

                        $(".region:not(:has(>li))").parent().hide();

                        if ($(".engeneering-filter").length) {
                            $("a[data-depname=" + SELECTED_DEPARTMENT_BY_DEFAULT + "]").click();
                            this.selectedDepartments = [SELECTED_DEPARTMENT_BY_DEFAULT];
                        }
                    } )

            },

       
            methods: {
                getPositionUrl: function (id) {
                     //return href + 'job?id=' + id;
                     // This needs to be set for pre-production 
                     return '/careers/' + 'job?id=' + id;
                },
                getLocations: function (region) {
                    return region.children;
                },
                getTeamsByDepartment: function (departmentName) {
                    return this.teams.filter((elem) => elem.department === departmentName);
                },
                filterPositionsByTeam: function (positions,team) {
                    let filteredPositions = positions.filter(
                        (el) => el.metadata[1].value === team && (this.selectedLocations.length == 0 || this.selectedLocations.indexOf(el.location.name) !== -1)
                    )

                    return filteredPositions
                },
                filterPositionsByCheckbox: function (positions, remoteChecked) {
                    if (!remoteChecked) {
                        return positions;
                    }
                    let filteredPositions = positions.filter (
                        (position) => {
                            let remoteMetadata = this.getItemFromMeta('Remote?', position.metadata);
                            if (remoteMetadata === null) {
                                return false;
                            }
                            return remoteMetadata.value === "Yes";

                        }
                    )

                    return filteredPositions
                },
                getFilteredPositions: function (team) {
                    let result = this.filterPositionsByTeam(this.positions, team.name);
                    return this.filterPositionsByCheckbox(result, this.remoteChecked);
                },
                setSelectedDepartments: function(item) {
                    this.selectedDepartments.indexOf(item) === -1 ? this.selectedDepartments.push(item) : this.selectedDepartments = this.selectedDepartments.filter((el) =>  el !== item);
                    this.selectedDepartments.length !== 0 ? this.selectedDepartments : this.departments;
                },
                setSelectedLocations: function(item) {
                    this.selectedLocations.indexOf(item) === -1 ? this.selectedLocations.push(item) : this.selectedLocations = this.selectedLocations.filter((el) =>  el !== item)
                    this.selectedLocations.length !== 0 ? this.selectedLocations : this.locations;
                },
                getItemFromMeta: function (name, metadata) {
                    return metadata.find(item =>  {
                        return item.name === name;
                    })
                }
            }
        });

        $('.aside-posts-filter').on('click', 'p', function(e){
            $(this).toggleClass('opened');
            $(this).next().slideToggle();
        });

        $('.aside-posts-filter').on('click', 'a', function(e){
            e.preventDefault();

            $(this).parent('li').toggleClass('current-category');

        });

        $('.aside-posts-filter').on('click', 'a', function(e){

            if ($('.positions-list .row').length) {
                $('.positions-list.true').show();
                $('.positions-list.false').hide();
            } else {
                $('.positions-list.true').hide();
                $('.positions-list.false').show();
            }

            $( ".positions-block" ).each(function() {

                if ($(this).find('.row').length) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
            $( ".team-list" ).each(function() {
                if ($(this).find('.row').length) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });



        $('.aside-posts-filter').on('change', 'input[type=checkbox]', function(e){

            if ($('.positions-list .row').length) {
                $('.positions-list.true').show();
                $('.positions-list.false').hide();
            } else {
                $('.positions-list.true').hide();
                $('.positions-list.false').show();
            }

            $( ".positions-block" ).each(function() {
                if ($(this).find('.row').length) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
            $( ".team-list" ).each(function() {
                if ($(this).find('.row').length) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });



    });

    $(window).on({
        // 'load': page.load,
        'resize': page.resize,
        'scroll': page.scroll
    });






})(jQuery, window, document);