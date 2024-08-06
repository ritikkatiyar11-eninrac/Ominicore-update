const categories = [
  {
    name: "Central",
    slug: "central",
    children: [
      {
        name: "CERC",
        slug: "central-cerc",
        children: [
          {
            name: "Orders",
            slug: "central-cerc-orders",
          },
          {
            name: "Petitions",
            slug: "central-cerc-petitions",
          },
          {
            name: "Consultation on Draft Regulations",
            slug: "central-cerc-codr",
          },
          {
            name: "Regulations",
            slug: "central-cerc-regulation",
          },
          {
            name: "Policies",
            slug: "central-cerc-policy",
          },
          {
            name: "Eninrac Comments on Draft Regulations",
            slug: "central-cerc-ecodr",
          },
          {
            name: "Public Hearings",
            slug: "central-cerc-publichearings",
          },
          {
            name: "Ammendments",
            slug: "central-cerc-ammendments",
          },
          {
            name: "MoM",
            slug: "central-cerc-mom",
          },
        ],
      },
      {
        name: "MoP",
        slug: "central-mop",
        children: [
          {
            name: "Regulations",
            slug: "central-mop-regulations",
          },
          {
            name: "Policy",
            slug: "central-mop-policy",
          },
          {
            name: "Announcements",
            slug: "central-mop-announcements",
          },
        ],
      },
      {
        name: "MNRE",
        slug: "central-mnre",
        children: [
          {
            name: "Regulations",
          },
          {
            name: "Policy",
            slug: "central-mnre-policy",
          },
          {
            name: "Announcements",
            slug: "central-mnre-announcements",
          },
        ],
      },
      {
        name: "MoF",
        slug: "central-mof",
        children: [
          {
            name: "Announcements",
            slug: "central-mof-announcements",
          },
        ],
      },
      {
        name: "MoC",
        slug: "central-moc",
        children: [
          {
            name: "Announcements",
            slug: "central-moc-announcements",
          },
        ],
      },
      {
        name: "Apellate Tribunal",
        slug: "central-apellatetribunal",
        children: [
          {
            name: "Landmark Judgements",
            slug: "central-apellatetribunal-landmarkjudgements",
          },
          {
            name: "Interim Orders",
            slug: "central-apellatetribunal-interimorders",
          },
          {
            name: "Final Orders",
            slug: "central-apellatetribunal-finalorders",
          },
        ],
      },
      {
        name: "Honb'le Supreme Court",
        slug: "central-supremecourt",
        children: [
          {
            name: "Landmark Judgements",
            slug: "central-supremecourt-landmarkjudgements",
          },
          {
            name: "Interim Orders",
            slug: "central-supremecourt-interimorders",
          },
          {
            name: "Final Orders",
            slug: "central-supremecourt-finalorders",
          },
        ],
      },
      {
        name: "Others",
        slug: "central-others",
        children: [],
      },
    ],
  },
  {
    name: "State",
    slug: "state",
    children: [
      {
        name: "Gujrat",
        slug: "state-gujrat",
        children: [
          {
            name: "GERC",
          },
        ],
      },
      {
        name: "Maharashtra",
        slug: "state-maharashtra",
        children: [
          {
            name: "MERC",
            slug: "state-maharashtra-merc",
          },
        ],
      },
      {
        name: "Rajsthan",
        slug: "state-rajsthan",
        children: [
          {
            name: "RERC",
            slug: "state-rajsthan-rerc",
          },
        ],
      },
      {
        name: "Punjab",
        slug: "state-punjab",
        children: [
          {
            name: "PERC",
            slug: "state-punjab-perc",
          },
        ],
      },
      {
        name: "Haryana",
        slug: "state-haryana",
        children: [
          {
            name: "HERC",
            slug: "state-haryana-herc",
          },
        ],
      },
      {
        name: "Uttarakhand",
        slug: "state-uttarakhand",
        children: [
          {
            name: "UERC",
            slug: "state-uttarakhand-uerc",
          },
        ],
      },
      {
        name: "odisha",
        slug: "state-odisha",
        children: [
          {
            name: "OERC",
            slug: "state-odisha-oerc",
          },
        ],
      },
      {
        name: "Bihar",
        slug: "state-bihar",
        children: [
          {
            name: "BERC",
            slug: "state-bihar-berc",
          },
        ],
      },
      {
        name: "Assam",
        slug: "state-Assam",
        children: [
          {
            name: "AERC",
            slug: "state-Assam-aerc",
          },
        ],
      },
      {
        name: "others",
        slug: "state-others",
        children: [],
      },
    ],
  },
  {
    name: "Generation",
    slug: "powergeneration",
    children: [
      {
        name: "Thermal",
        slug: "powergeneration-thermal",
        children: [],
      },
      {
        name: "Solar",
        slug: "powergeneration-solar",
        children: [],
      },
      {
        name: "Wind",
        slug: "powergeneration-wind",
        children: [],
      },
      {
        name: "Biomass",
        slug: "powergeneration-biomass",
        children: [],
      },
      {
        name: "Small Hydro Plants",
        slug: "powergeneration-smallhydro",
        children: [],
      },
      {
        name: "Nuclear",
        slug: "powergeneration-nuclear",
        children: [],
      },
      {
        name: "Others",
        slug: "powergeneration-others",
        children: [],
      },
    ],
  },
  {
    name: "Distribution",
    slug: "powerdistribution",
    children: [
      {
        name: "Tariff",
        slug: "powerdistribution-tariff",
        children: [],
      },
      {
        name: "C&I Consumers",
        slug: "powerdistribution-ci",
        children: [],
      },
      {
        name: "Network Augmentation",
        slug: "powerdistribution-networkaugmentation",
        children: [],
      },
    ],
  },
  {
    name: "Transmission",
    slug: "powertansmission",
    children: [
      {
        name: "Connectivity",
        slug: "powertansmission-connectivity",
        children: [
          {
            name: "STU",
            slug: "powertansmission-connectivity-stu",
            children: [],
          },
          {
            name: "CTU",
            slug: "powertansmission-connectivity-ctu",
            children: [],
          },
        ],
      },
      {
        name: "Charges",
        slug: "powertansmission-charges",
        children: [
          {
            name: "STU",
            slug: "powertansmission-charges-stu",
            children: [],
          },
          {
            name: "CTU",
            slug: "powertansmission-charges-ctu",
            children: [],
          },
        ],
      },
      {
        name: "Projects",
        slug: "powertansmission-projects",
        children: [],
      },
      {
        name: "Govt Announcements",
        slug: "powertansmission-govtannouncements",
        children: [
          {
            name: "Central",
            slug: "powertansmission-govtannouncements-central",
            children: [],
          },
          {
            name: "State",
            slug: "powertansmission-govtannouncements-state",
            children: [],
          },
        ],
      },
    ],
  },
  {
    name: "Bid Updates",
    slug: "bidupdates",
    children: [
      {
        name: "Bid Invites",
        slug: "bidupdates-bidinvites",
        children: [
          {
            name: "SECI",
            slug: "bidupdates-bidinvites-seci",
            children: [],
          },
          {
            name: "PSU",
            slug: "bidupdates-bidinvites-psu",
            children: [],
          },
          {
            name: "State Govt",
            slug: "bidupdates-bidinvites-state",
            children: [],
          },
          {
            name: "Others",
            slug: "bidupdates-bidinvites-others",
            children: [],
          },
        ],
      },
      {
        name: "Bid Results",
        slug: "bidupdates-bidresults",
        children: [],
      },
      {
        name: "Others",
        slug: "bidupdates-others",
        children: [],
      },
    ],
  },
  {
    name: "Infographics",
    slug: "infographic",
    children: [
      {
        name: "Central",
        slug: "infographic-central",
        children: [],
      },
      {
        name: "State",
        slug: "infographic-state",
        children: [],
      },
      {
        name: "Generation",
        slug: "infographic-generation",
        children: [],
      },
      {
        name: "Distribution",
        slug: "infographic-distribution",
        children: [],
      },
      {
        name: "Transmission",
        slug: "infographic-transmission",
        children: [],
      },
      {
        name: "Bid Updates",
        slug: "infographic-bidupdates",
        children: [],
      },
      {
        name: "OpenAccess",
        slug: "infographic-openaccess",
        children: [],
      },
      {
        name: "New Energies",
        slug: "infographic-newenergies",
        children: [],
      },
      {
        name: "Misc",
        slug: "infographic-misc",
        children: [],
      },
    ],
  },
  {
    name: "New Energies",
    slug: "newenergies",
    children: [
      {
        name: "BESS",
        slug: "newenergies-bess",
        children: [],
      },
      {
        name: "Hydrogen",
        slug: "newenergies-hydrogen",
        children: [],
      },
      {
        name: "PSHP (Pump Storage Hydro Plants)",
        slug: "newenergies-pshp",
        children: [],
      },
    ],
  },
  {
    name: "Solar Rooftop",
    slug: "solarrooftop",
    children: [
      {
        name: "Regulations",
        slug: "solarrooftop-regulations",
        children: [],
      },
      {
        name: "Policies",
        slug: "solarrooftop-policies",
        children: [],
      },
      {
        name: "Feed in Tariffs",
        slug: "solarrooftop-feedintariffs",
        children: [],
      },
    ],
  },
  {
    name: "Open Access",
    slug: "openaccess",
    children: [
      {
        name: "Solar",
        slug: "openaccess-solar",
        children: [
          {
            name: "Charges",
            slug: "openaccess-solar-charges",
            children: [],
          },
          {
            name: "Duty",
            slug: "openaccess-solar-duty",
            children: [],
          },
          {
            name: "Waivers",
            slug: "openaccess-solar-waivers",
            children: [],
          },
          {
            name: "Banking",
            slug: "openaccess-solar-banking",
            children: [],
          },
        ],
      },
      {
        name: "Wind",
        slug: "openaccess-wind",
        children: [
          {
            name: "Charges",
            slug: "openaccess-wind-charges",
            children: [],
          },
          {
            name: "Duty",
            slug: "openaccess-wind-duty",
            children: [],
          },
          {
            name: "Waivers",
            slug: "openaccess-wind-waivers",
            children: [],
          },
          {
            name: "Banking",
            slug: "openaccess-wind-banking",
            children: [],
          },
        ],
      },
      {
        name: "Hybrid",
        slug: "openaccess-hybrid",
        children: [
          {
            name: "Charges",
            slug: "openaccess-hybrid-charges",
            children: [],
          },
          {
            name: "Duty",
            slug: "openaccess-hybrid-duty",
            children: [],
          },
          {
            name: "Waivers",
            slug: "openaccess-hybrid-waivers",
            children: [],
          },
          {
            name: "Banking",
            slug: "openaccess-hybrid-banking",
            children: [],
          },
        ],
      },
    ],
  },
];

let lastActiveurl;
let newBaseurl = "http://192.168.1.156/omnicore/";

const menusectionObject = {
  postData: {},
  setPostData(postData) {
    this.postData = postData;
  },

  fetchData() {
    let self = this;
    fetch(newBaseurl + "assets/js/post.json")
      .then((response) => response.json())
      .then((result) => {
        menusectionObject.setPostData(result);
        menusectionObject.renderCategories();
      });
  },

  renderCategories() {
    let self = this;
    const parentCategory = document.getElementById("parent-category");

    parentCategory.innerHTML = "";

    categories.forEach((category, index) => {
      let li = document.createElement("li");
      li.className = "bn-filter-item";
      let a = document.createElement("a");
      a.className = "a";
      a.href = `${window.location.origin}/omnicore/category/${category.slug}`;
      // console.log(a.href)
      let btn = document.createElement("button");
      btn.className = "bn-filter bn-filter-top";
      btn.dataset.slug = category.slug;
      btn.dataset.title = category.name;
      btn.dataset.index = index;
      btn.textContent = category.name;

      a.appendChild(btn);
      li.appendChild(a);
      parentCategory.appendChild(li);
    });

    // Set the active category based on the current URL
    self.setActiveCategoryFromUrl();
  },

  showSubCategories(category, parentIndex) {
    let self = this;
    const subCategory = document.getElementById("sub-category");
    const grandCategory = document.getElementById("grand-category");

    subCategory.innerHTML = "";
    grandCategory.innerHTML = "";

    category.children.forEach((sub, subIndex) => {
      const li = document.createElement("li");
      li.className = "bn-subfilter-item";
      li.style = "transform: scale(1); opacity: 1;";
      let a = document.createElement("a");
      a.className = "";
      a.href = `${window.location.origin}/omnicore/category/${category.slug}/${sub.slug}`;
      let btn = document.createElement("button");
      btn.className = "bn-subfilter child";
      btn.dataset.slug = sub.slug;
      btn.dataset.title = sub.name;
      btn.dataset.parentIndex = parentIndex;
      btn.dataset.subIndex = subIndex;
      btn.textContent = sub.name;

      a.appendChild(btn);
      li.appendChild(a);
      subCategory.appendChild(li);
    });
    self.setActive("parent-category", parentIndex);
  },

  showGrandCategories(subCategory, ct, pt, cat) {
    let self = this;

    const grandCategory = document.getElementById("grand-category");

    grandCategory.innerHTML = "";
    if (subCategory.children) {
      subCategory.children.forEach((grand, grandIndex) => {
        const li = document.createElement("li");
        li.className = "bn-subfilter-item";
        li.style = "transform: scale(1); opacity: 1;";
        let a = document.createElement("a");
        a.className = "";
        a.href = `${window.location.origin}/omnicore/category/${cat.slug}/${subCategory.slug}/${grand.slug}`;
        let btn = document.createElement("button");
        btn.className = "bn-subfilter";
        btn.dataset.slug = grand.slug;
        btn.dataset.title = grand.name;
        btn.textContent = grand.name;
        a.appendChild(btn);
        li.appendChild(a);
        grandCategory.appendChild(li);
      });
      self.setActive("sub-category", ct);
      self.setActive("parent-category", pt);
    }
  },
  setActive(listId, index) {
    const activeItems = document.getElementById(listId).children;

    for (let i = 0; i < activeItems.length; i++) {
      activeItems[i].firstChild.firstChild.classList.remove(
        "bn-subfilter--active"
      );
    }
    activeItems[index].firstChild.firstChild.classList.add(
      "bn-subfilter--active"
    );
  },
  clearSubCategories() {
    const subCategory = document.getElementById("sub-category");
    const grandCategory = document.getElementById("grand-category");
    subCategory.innerHTML = "";
    grandCategory.innerHTML = "";
  },

  updateUrlAndState(...pathSegments) {
    const url = `${
      window.location.origin
    }/omnicore/category/${pathSegments.join("/")}`;
    window.history.pushState({}, "", url);
  },

  getParentNameByslug(slug) {
    const categoryObject = categories.find(
      (category) => category.slug === slug
    );
    return categoryObject.name;
  },

  getChildNameByslug(slug) {
    let childt;
    categories.forEach((category) => {
      const child = category.children.find((child) => child.slug === slug);

      if (child) {
        childt = child.name;
      }
    });
    return childt;
  },

  getgrandNameByslug(slug) {
    let childt;
    categories.forEach((category) => {
      category.children.forEach((grand) => {
        grand.name === slug;
        if (grand) {
          childt = grand.name;
        }
      });
    });
    return childt;
  },

  setActiveCategoryFromUrl() {
    let self = this;
    let breadcumCategory = document.getElementById("breadcum-cat");
    let activeCategory = document.getElementById("activeCategory");
    const urlPath = window.location.pathname.split("/").slice(3);

    if (urlPath.length > 0) {
      const parentCategoryName = urlPath[0];
      breadcumCategory.innerHTML = `<span>${self.getParentNameByslug(
        parentCategoryName
      )}</span>`;
      activeCategory.innerHTML = `<span>${self.getParentNameByslug(
        parentCategoryName
      )}</span>`;
      // console.log(activeCategory);
      const parentSlug = categories.find(
        (category) => category.slug === parentCategoryName
      );
      const parentIndex = categories.findIndex(
        (category) => category.slug === parentCategoryName
      );
      if (parentIndex > -1) {
        self.showSubCategories(categories[parentIndex], parentIndex);
        if (urlPath.length > 1) {
          const subCategoryName = urlPath[1];
          const subCategory = categories[parentIndex].children.find(
            (sub) => sub.slug === subCategoryName
          );

          if (subCategory) {
            const subIndex =
              categories[parentIndex].children.indexOf(subCategory);
            breadcumCategory.innerHTML = `
            <span>${self.getParentNameByslug(
              parentCategoryName
            )}</span> > <span>${self.getChildNameByslug(subCategoryName)}</span>
            `;

            activeCategory.innerHTML = `<span>${self.getChildNameByslug(
              subCategoryName
            )}</span>`;

            self.setActive("sub-category", subIndex);
            self.showGrandCategories(
              subCategory,
              subIndex,
              parentIndex,
              parentSlug
            );

            if (urlPath.length > 2) {
              const grandCategoryName = urlPath[2];
              const grandCategory = subCategory.children.find(
                (grand) => grand.slug === grandCategoryName
              );
              if (grandCategory) {
                const grandIndex = subCategory.children.indexOf(grandCategory);
                breadcumCategory.innerHTML = `<span>${self.getParentNameByslug(
                  parentCategoryName
                )}</span> > <span>${self.getChildNameByslug(
                  subCategoryName
                )}</span> > <span>${self.getgrandNameByslug(
                  grandCategoryName
                )}</span>`;
                activeCategory.innerHTML = `<span>${self.getgrandNameByslug(
                  grandCategoryName
                )}</span>`;
                self.setActive("grand-category", grandIndex);
              }
            }
          }
        }
      }
    }
  },
};

menusectionObject.fetchData();

document.addEventListener("DOMContentLoaded", (e) => {
  e.preventDefault();
  menusectionObject.setActiveCategoryFromUrl();
  menusectionObject.renderCategories();
});
